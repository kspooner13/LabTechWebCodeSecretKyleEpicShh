CREATE PROCEDURE `plugin_hc_ksbz_update_scores`()
BEGIN
TRUNCATE hc_scores;
TRUNCATE hc_scores_computers;
INSERT INTO `hc_scores` (clientid,`Client Name`,`Team Assignment`,`Antivirus`,
	`Disk`,`Intrusion`,`Usability`,`Services`,`Updates`,`Event Log`,
	`Avg Score`,`AV Ex`,`Disk Ex`,`Intrusion Ex`,`Usability Ex`,
	`Services Ex`,`Updates Ex`,`Event Ex`) 
   SELECT `ClientID`,`Client Name`,`Team Assignment`,
	`Antivirus`,`Disk`,`Intrusion`,`Usability`,
	`Services`,`Updates`,`Event Log`,`Avg Score`,
	`AV Ex`,`Disk Ex`,`Intrusion Ex`,`Usability Ex`,
	`Services Ex`,`Updates Ex`,`Event Ex` 
   FROM plugin_hc_ksbz_team_scores JOIN v_extradataclients USING (clientid);
   
INSERT INTO hc_scores_computers (SELECT * FROM `plugin_hc_ksbz_computer_exclusion`);
    END