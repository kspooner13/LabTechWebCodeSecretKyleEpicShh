CREATE DEFINER=`root`@`localhost` FUNCTION `HealthScore`(CID int) RETURNS int(11)
    NO SQL
    DETERMINISTIC
BEGIN
  Declare score int;
  Declare result int;
  Declare Total int;
  Declare Totalscore int Default 0 ;
  Declare Totalresult int Default 0 ;
  Declare TotalTotal int Default 0 ;
SELECT 
    IFNULL(SUM(IF(h_computerstatsdaily.MEM < MemoryLimit,
                1 * (MemoryWeight * .01),
                0)) + SUM(IF(h_computerstatsdaily.CPU > CPULimit,
                1 * (CPUWeight * .01),
                0)),
            0) AS Result,
    IFNULL((COUNT(*) * (1 * (MemoryWeight * .01))) + (COUNT(*) * (1 * (CPUWeight * .01))),
            1) AS Total,
    1 AS PerfScore
FROM
    managementScore,
    h_computerstatsdaily
        JOIN
    Computers USING (ComputerID)
WHERE
    h_computerstatsdaily.EventDate = DATE(DATE_ADD(CURDATE(), INTERVAL - 1 DAY))
        AND Computers.ClientID = CID INTO @result , @total , @score;
set @TotalTotal =   @Total;
set @Totalresult =  @Total-@result;
SELECT 
    IFNULL(SUM(IF(h_DriveStatsDaily.Free < DriveSpaceLevel,
                1 * (DriveSpaceWeight * .01),
                0)) + SUM(IF(h_DriveStatsDaily.Frag > DriveFragLevel,
                1 * (DriveFragWeight * .01),
                0)),
            0) AS Result,
    IFNULL((COUNT(*) * (1 * (DriveSpaceWeight * .01))) + (COUNT(*) * (1 * (DriveFragWeight * .01))),
            1) AS Total,
    1 AS DriveScore
FROM
    managementScore,
    h_DriveStatsDaily
        JOIN
    Drives USING (DriveID)
        JOIN
    Computers USING (ComputerID)
WHERE
    h_DrivestatsDaily.EventDate = DATE(DATE_ADD(CURDATE(), INTERVAL - 1 DAY))
        AND Computers.ClientID = CID INTO @result , @total , @score;
set @TotalTotal =  @TotalTotal + @Total;
set @Totalresult =  @Totalresult + (@Total-@result);
SELECT 
    IFNULL((SUM(NOT h_stats.VirusScanEnabled) * (VirusDisabledWeight * .01)) + (SUM(NOT h_stats.VirusScanUpToDate) * (VirusOutDateWeight * .01)) + (SUM(h_stats.VirusScanMissing) * (VirusMissingWeight * .01)),
            0) AS Result,
    IFNULL((COUNT(*) * (VirusDisabledWeight * .01)) + (COUNT(*) * (VirusOutDateWeight * .01)) + (COUNT(*) * (VirusMissingWeight * .01)),
            1) AS Total,
    1 AS VirusScore
FROM
    managementScore,
    h_stats
        JOIN
    Computers USING (ComputerID)
WHERE
    h_stats.StatDate > DATE_ADD(NOW(), INTERVAL - 1 DAY)
        AND Computers.ClientID = CID INTO @result , @total , @score;
set @TotalTotal =  @TotalTotal + @Total;
set @Totalresult =  @Totalresult + (@Total-@result);
SELECT 
    IFNULL(SUM(IF(h_stats.EventLogSystemErrors > EventLogSystemCount,
                1 * (EventLogSystemWeight * .01),
                0)) + SUM(IF(h_stats.EventLogSecurityErrors > EventLogSecurityCount,
                1 * (EventLogSecurityWeight * .01),
                0)) + SUM(IF(h_stats.EventLogApplicationErrors > EventLogAppCount,
                1 * (EventLogAppWeight * .01),
                0)),
            0) AS Result,
    IFNULL((1 * (EventLogSystemWeight * .01)) + (1 * (EventLogSecurityWeight * .01)) + (1 * (EventLogAppWeight * .01)),
            1) AS total,
    1 AS EventScore
FROM
    managementScore,
    h_stats
        JOIN
    Computers USING (ComputerID)
WHERE
    h_stats.StatDate > DATE_ADD(NOW(), INTERVAL - 1 DAY)
        AND Computers.ClientID = CID INTO @result , @total , @score;
set @TotalTotal =  @TotalTotal + @Total;
set @Totalresult =  @Totalresult + (@Total-@result);
SELECT 
    IFNULL((COUNT(*) * (1 * (OSBadWeight * .01))) + (COUNT(*) * (1 * (OSWarningWeight * .01))),
            1) AS Total,
    IFNULL((SUM(IF(OS LIKE STRINGSPLIT(OSBadList, ',', 1)
                    OR OS LIKE STRINGSPLIT(OSBadList, ',', 2)
                    OR OS LIKE STRINGSPLIT(OSBadList, ',', 3),
                1 * (OSBadWeight * .01),
                0))) + (SUM(IF(OS LIKE STRINGSPLIT(OSWarningList, ',', 1)
                    OR STRINGSPLIT(OSWarningList, ',', 2)
                    OR STRINGSPLIT(OSWarningList, ',', 3),
                1 * (OSWarningWeight * .01),
                0))),
            0) AS Result,
    100 AS OSScore
FROM
    Computers,
    ManagementScore
WHERE
    Computers.ClientID = CID INTO @total , @result , @score;
set @TotalTotal =  @TotalTotal + @Total;
set @Totalresult =  @Totalresult + (@Total-@result);
SELECT 
    IFNULL(COUNT(*), 1) AS Total,
    IFNULL(SUM(NoneMissing) + (SUM(Missing1to2) * (PatchMissing12Weight * .01)) + (SUM(Missing3to5) * (PatchMissing35Weight * .01)) + (SUM(Missing5) * (PatchMissing6Weight * .01)),
            0) AS Result,
    100 AS PatchScore
FROM
    v_Patch,
    managementscore
WHERE
    ClientID = CID INTO @total , @result , @score;
set @TotalTotal =  @TotalTotal + @Total;
set @Totalresult =  @Totalresult + (@Total-@result);
SELECT 
    IFNULL(COUNT(*), 1) AS Total,
    IFNULL((SUM(IF(Status = 1
                    AND TIMESTAMPDIFF(HOUR, StartedDate, NOW()) > TicketNewAgeLimit,
                1 * (TicketNewAgeWeight * .01),
                0))) + (SUM(IF(Status = 2
                    AND TIMESTAMPDIFF(HOUR, StartedDate, NOW()) > TicketOpenAgeLimit,
                1 * (TicketOpenWeight * .01),
                0))),
            0) AS Result,
    1 AS TicketScore
FROM
    tickets,
    managementscore
WHERE
    ClientID = CID INTO @total , @result , @score;
set @TotalTotal =  @TotalTotal + @Total;
set @Totalresult =  @Totalresult + (@Total-@result);
SELECT 
    IFNULL(MAX(Reliablity), 100)
FROM
    AgentComputerData
        JOIN
    Computers USING (ComputerID),
    managementscore
WHERE
    Computers.ClientID = CID INTO @result;
set @TotalTotal =  @TotalTotal + 100;
set @Totalresult =  @Totalresult + @result;
Set @TotalScore = 100*(@TotalResult/@TotalTotal) ;
return @TotalScore ;
END