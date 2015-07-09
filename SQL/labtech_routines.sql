CREATE DATABASE  IF NOT EXISTS `labtech` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `labtech`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: labtech.acumenit.com    Database: labtech
-- ------------------------------------------------------
-- Server version	5.5.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `vxr_healthcheck`
--

DROP TABLE IF EXISTS `vxr_healthcheck`;
/*!50001 DROP VIEW IF EXISTS `vxr_healthcheck`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vxr_healthcheck` AS SELECT 
 1 AS `ClientID`,
 1 AS `ComputerID`,
 1 AS `CheckDate`,
 1 AS `AVHealth`,
 1 AS `AVResults`,
 1 AS `DiskHealth`,
 1 AS `DiskResults`,
 1 AS `IntrusionHealth`,
 1 AS `IntrusionResults`,
 1 AS `UsabilityHealth`,
 1 AS `UsabilityResults`,
 1 AS `ServiceHealth`,
 1 AS `ServiceResults`,
 1 AS `UpdateHealth`,
 1 AS `UpdateResults`,
 1 AS `EventHealth`,
 1 AS `EventResults`,
 1 AS `BackupHealth`,
 1 AS `BackupResults`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `plugin_hc_ksbz_computers`
--

DROP TABLE IF EXISTS `plugin_hc_ksbz_computers`;
/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_computers`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `plugin_hc_ksbz_computers` AS SELECT 
 1 AS `computerid`,
 1 AS `Computer Name`,
 1 AS `clientid`,
 1 AS `Client Name`,
 1 AS `Team`,
 1 AS `Antivirus`,
 1 AS `Disk`,
 1 AS `Intrusion`,
 1 AS `Usability`,
 1 AS `Services`,
 1 AS `Updates`,
 1 AS `Event Log`,
 1 AS `Avg Score`,
 1 AS `AV Ex`,
 1 AS `Disk Ex`,
 1 AS `Intrusion Ex`,
 1 AS `Usability Ex`,
 1 AS `Services Ex`,
 1 AS `Updates Ex`,
 1 AS `Event Ex`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `plugin_hc_ksbz_team_scores`
--

DROP TABLE IF EXISTS `plugin_hc_ksbz_team_scores`;
/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_team_scores`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `plugin_hc_ksbz_team_scores` AS SELECT 
 1 AS `clientid`,
 1 AS `Client Name`,
 1 AS `Team`,
 1 AS `Antivirus`,
 1 AS `Disk`,
 1 AS `Intrusion`,
 1 AS `Usability`,
 1 AS `Services`,
 1 AS `Updates`,
 1 AS `Event Log`,
 1 AS `Avg Score`,
 1 AS `AV Ex`,
 1 AS `Disk Ex`,
 1 AS `Intrusion Ex`,
 1 AS `Usability Ex`,
 1 AS `Services Ex`,
 1 AS `Updates Ex`,
 1 AS `Event Ex`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `plugin_hc_ksbz_computer_exclusion`
--

DROP TABLE IF EXISTS `plugin_hc_ksbz_computer_exclusion`;
/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_computer_exclusion`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `plugin_hc_ksbz_computer_exclusion` AS SELECT 
 1 AS `ComputerID`,
 1 AS `Client Name`,
 1 AS `Team Assignment`,
 1 AS `Computer Name`,
 1 AS `Ignore Antivirus`,
 1 AS `Ignore Disk`,
 1 AS `Ignore Intrusion`,
 1 AS `Ignore Usability`,
 1 AS `Ignore Services`,
 1 AS `Ignore Updates`,
 1 AS `Ignore Event Logs`,
 1 AS `Exclusion Comments`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `plugin_hc_ksbz_client_exclusions`
--

DROP TABLE IF EXISTS `plugin_hc_ksbz_client_exclusions`;
/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_client_exclusions`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `plugin_hc_ksbz_client_exclusions` AS SELECT 
 1 AS `ClientID`,
 1 AS `Client Name`,
 1 AS `Team Assignment`,
 1 AS `Ignore - Non Contractual Services`,
 1 AS `Ignore Antivirus`,
 1 AS `Ignore Disk`,
 1 AS `Ignore Intrusion`,
 1 AS `Ignore Usability`,
 1 AS `Ignore Services`,
 1 AS `Ignore Updates`,
 1 AS `Ignore Event Log`,
 1 AS `Go Live Date`,
 1 AS `Exclusion Comments`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vxr_healthcheck`
--

/*!50001 DROP VIEW IF EXISTS `vxr_healthcheck`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vxr_healthcheck` AS select `cmp`.`ClientID` AS `ClientID`,`cmp`.`ComputerID` AS `ComputerID`,`es`.`EventDate` AS `CheckDate`,if((length(`es`.`Stat15`) < 1),NULL,round((left(`es`.`Stat15`,4) * 100),0)) AS `AVHealth`,replace(`es`.`Stat15`,left(`es`.`Stat15`,5),'') AS `AVResults`,if((length(`es`.`Stat16`) < 1),NULL,round((left(`es`.`Stat16`,4) * 100),0)) AS `DiskHealth`,replace(`es`.`Stat16`,left(`es`.`Stat16`,5),'') AS `DiskResults`,if((length(`es`.`Stat17`) < 1),NULL,round((left(`es`.`Stat17`,4) * 100),0)) AS `IntrusionHealth`,replace(`es`.`Stat17`,left(`es`.`Stat17`,5),'') AS `IntrusionResults`,if((length(`es`.`Stat18`) < 1),NULL,round((left(`es`.`Stat18`,4) * 100),0)) AS `UsabilityHealth`,replace(`es`.`Stat18`,left(`es`.`Stat18`,5),'') AS `UsabilityResults`,if((length(`es`.`Stat19`) < 1),NULL,round((left(`es`.`Stat19`,4) * 100),0)) AS `ServiceHealth`,replace(`es`.`Stat19`,left(`es`.`Stat19`,5),'') AS `ServiceResults`,if((length(`es`.`Stat20`) < 1),NULL,round((left(`es`.`Stat20`,4) * 100),0)) AS `UpdateHealth`,replace(`es`.`Stat20`,left(`es`.`Stat20`,5),'') AS `UpdateResults`,if((length(`es`.`Stat14`) < 1),NULL,round((left(`es`.`Stat14`,4) * 100),0)) AS `EventHealth`,replace(`es`.`Stat14`,left(`es`.`Stat14`,5),'') AS `EventResults`,if((length(`es`.`Stat1`) < 1),NULL,round((left(`es`.`Stat1`,4) * 100),0)) AS `BackupHealth`,replace(`es`.`Stat1`,left(`es`.`Stat1`,5),'') AS `BackupResults` from (`computers` `cmp` join `v_ltcr_h_extrastats` `es` on((`cmp`.`ComputerID` = `es`.`ComputerID`))) where (`es`.`Stat14` <> '-1') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `plugin_hc_ksbz_computers`
--

/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_computers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `plugin_hc_ksbz_computers` AS (select `computers`.`ComputerID` AS `computerid`,`computers`.`Name` AS `Computer Name`,`clients`.`ClientID` AS `clientid`,`clients`.`Name` AS `Client Name`,`v_extradataclients`.`Team Assignment` AS `Team`,round(avg(`vxr_healthcheck`.`AVHealth`),1) AS `Antivirus`,round(avg(`vxr_healthcheck`.`DiskHealth`),1) AS `Disk`,round(avg(`vxr_healthcheck`.`IntrusionHealth`),1) AS `Intrusion`,round(avg(`vxr_healthcheck`.`UsabilityHealth`),1) AS `Usability`,round(avg(`vxr_healthcheck`.`ServiceHealth`),1) AS `Services`,round(avg(`vxr_healthcheck`.`UpdateHealth`),1) AS `Updates`,round(avg(`vxr_healthcheck`.`EventHealth`),1) AS `Event Log`,round((((((((round(avg(`vxr_healthcheck`.`AVHealth`),1) + round(avg(`vxr_healthcheck`.`DiskHealth`),1)) + round(avg(`vxr_healthcheck`.`IntrusionHealth`),1)) + round(avg(`vxr_healthcheck`.`UsabilityHealth`),1)) + round(avg(`vxr_healthcheck`.`ServiceHealth`),1)) + round(avg(`vxr_healthcheck`.`UpdateHealth`),1)) + round(avg(`vxr_healthcheck`.`EventHealth`),1)) / 7),1) AS `Avg Score`,round(avg((case when (`v_extradataclients`.`Ignore Antivirus` <> 1) then (case when (`v_extradatacomputers`.`Ignore Antivirus` <> 1) then `vxr_healthcheck`.`AVHealth` end) else `vxr_healthcheck`.`AVHealth` end)),1) AS `AV Ex`,round(avg((case when (`v_extradataclients`.`Ignore Disk` <> 1) then (case when (`v_extradatacomputers`.`Ignore Disk` <> 1) then `vxr_healthcheck`.`DiskHealth` end) else `vxr_healthcheck`.`DiskHealth` end)),1) AS `Disk Ex`,round(avg((case when (`v_extradataclients`.`Ignore Intrusion` <> 1) then (case when (`v_extradatacomputers`.`Ignore Intrusion` <> 1) then `vxr_healthcheck`.`IntrusionHealth` end) else `vxr_healthcheck`.`IntrusionHealth` end)),1) AS `Intrusion Ex`,round(avg((case when (`v_extradataclients`.`Ignore Usability` <> 1) then (case when (`v_extradatacomputers`.`Ignore Usability` <> 1) then `vxr_healthcheck`.`UsabilityHealth` end) else `vxr_healthcheck`.`UsabilityHealth` end)),1) AS `Usability Ex`,round(avg((case when (`v_extradataclients`.`Ignore Services` <> 1) then (case when (`v_extradatacomputers`.`Ignore Services` <> 1) then `vxr_healthcheck`.`ServiceHealth` end) else `vxr_healthcheck`.`ServiceHealth` end)),1) AS `Services Ex`,round(avg((case when (`v_extradataclients`.`Ignore Updates` <> 1) then (case when (`v_extradatacomputers`.`Ignore Updates` <> 1) then `vxr_healthcheck`.`UpdateHealth` end) else `vxr_healthcheck`.`UpdateHealth` end)),1) AS `Updates Ex`,round(avg((case when (`v_extradataclients`.`Ignore Event Log` <> 1) then (case when (`v_extradatacomputers`.`Ignore Event Logs` <> 1) then `vxr_healthcheck`.`EventHealth` end) else `vxr_healthcheck`.`EventHealth` end)),1) AS `Event Ex` from ((((`vxr_healthcheck` join `clients` on((`vxr_healthcheck`.`ClientID` = `clients`.`ClientID`))) left join `v_extradataclients` on((`vxr_healthcheck`.`ClientID` = `v_extradataclients`.`clientid`))) left join `computers` on((`vxr_healthcheck`.`ComputerID` = `computers`.`ComputerID`))) left join `v_extradatacomputers` on((`vxr_healthcheck`.`ComputerID` = `v_extradatacomputers`.`computerid`))) where ((`vxr_healthcheck`.`CheckDate` > (now() + interval -(1) month)) and (`v_extradataclients`.`Team Assignment` <> NULL)) group by `computers`.`Name`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `plugin_hc_ksbz_team_scores`
--

/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_team_scores`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `plugin_hc_ksbz_team_scores` AS (select `clients`.`ClientID` AS `clientid`,`clients`.`Name` AS `Client Name`,`v_extradataclients`.`Team Assignment` AS `Team`,round(avg(`vxr_healthcheck`.`AVHealth`),1) AS `Antivirus`,round(avg(`vxr_healthcheck`.`DiskHealth`),1) AS `Disk`,round(avg(`vxr_healthcheck`.`IntrusionHealth`),1) AS `Intrusion`,round(avg(`vxr_healthcheck`.`UsabilityHealth`),1) AS `Usability`,round(avg(`vxr_healthcheck`.`ServiceHealth`),1) AS `Services`,round(avg(`vxr_healthcheck`.`UpdateHealth`),1) AS `Updates`,round(avg(`vxr_healthcheck`.`EventHealth`),1) AS `Event Log`,round((((((((round(avg(`vxr_healthcheck`.`AVHealth`),1) + round(avg(`vxr_healthcheck`.`DiskHealth`),1)) + round(avg(`vxr_healthcheck`.`IntrusionHealth`),1)) + round(avg(`vxr_healthcheck`.`UsabilityHealth`),1)) + round(avg(`vxr_healthcheck`.`ServiceHealth`),1)) + round(avg(`vxr_healthcheck`.`UpdateHealth`),1)) + round(avg(`vxr_healthcheck`.`EventHealth`),1)) / 7),1) AS `Avg Score`,round(avg(if((`v_extradataclients`.`Ignore Antivirus` = 1),'',if((`v_extradatacomputers`.`Ignore Antivirus` = 1),'',`vxr_healthcheck`.`AVHealth`))),1) AS `AV Ex`,round(avg(if((`v_extradataclients`.`Ignore Disk` = 1),'',if((`v_extradatacomputers`.`Ignore Disk` = 1),'',`vxr_healthcheck`.`DiskHealth`))),1) AS `Disk Ex`,round(avg(if((`v_extradataclients`.`Ignore Intrusion` = 1),'',if((`v_extradatacomputers`.`Ignore Intrusion` = 1),'',`vxr_healthcheck`.`IntrusionHealth`))),1) AS `Intrusion Ex`,round(avg(if((`v_extradataclients`.`Ignore Usability` = 1),'',if((`v_extradatacomputers`.`Ignore Usability` = 1),'',`vxr_healthcheck`.`UsabilityHealth`))),1) AS `Usability Ex`,round(avg(if((`v_extradataclients`.`Ignore Services` = 1),'',if((`v_extradatacomputers`.`Ignore Services` = 1),'',`vxr_healthcheck`.`ServiceHealth`))),1) AS `Services Ex`,round(avg(if((`v_extradataclients`.`Ignore Updates` = 1),'',if((`v_extradatacomputers`.`Ignore Updates` = 1),'',`vxr_healthcheck`.`UpdateHealth`))),1) AS `Updates Ex`,round(avg(if((`v_extradataclients`.`Ignore Event Log` = 1),'',if((`v_extradatacomputers`.`Ignore Event Logs` = 1),'',`vxr_healthcheck`.`EventHealth`))),1) AS `Event Ex` from (((`vxr_healthcheck` join `clients` on((`vxr_healthcheck`.`ClientID` = `clients`.`ClientID`))) left join `v_extradataclients` on((`vxr_healthcheck`.`ClientID` = `v_extradataclients`.`clientid`))) left join `v_extradatacomputers` on((`vxr_healthcheck`.`ComputerID` = `v_extradatacomputers`.`computerid`))) where ((`vxr_healthcheck`.`CheckDate` > (now() + interval -(1) month)) and (`v_extradataclients`.`Team Assignment` <> NULL)) group by `clients`.`Name`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `plugin_hc_ksbz_computer_exclusion`
--

/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_computer_exclusion`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `plugin_hc_ksbz_computer_exclusion` AS (select `computers`.`ComputerID` AS `ComputerID`,`clients`.`Name` AS `Client Name`,`v_extradataclients`.`Team Assignment` AS `Team Assignment`,`computers`.`Name` AS `Computer Name`,`v_extradatacomputers`.`Ignore Antivirus` AS `Ignore Antivirus`,`v_extradatacomputers`.`Ignore Disk` AS `Ignore Disk`,`v_extradatacomputers`.`Ignore Intrusion` AS `Ignore Intrusion`,`v_extradatacomputers`.`Ignore Usability` AS `Ignore Usability`,`v_extradatacomputers`.`Ignore Services` AS `Ignore Services`,`v_extradatacomputers`.`Ignore Updates` AS `Ignore Updates`,`v_extradatacomputers`.`Ignore Event Logs` AS `Ignore Event Logs`,`v_extradatacomputers`.`Exclusion Comments` AS `Exclusion Comments` from (((`computers` join `v_extradatacomputers` on((`computers`.`ComputerID` = `v_extradatacomputers`.`computerid`))) left join `clients` on((`computers`.`ClientID` = `clients`.`ClientID`))) left join `v_extradataclients` on((`computers`.`ClientID` = `v_extradataclients`.`clientid`))) where (((`v_extradatacomputers`.`Ignore Antivirus` or `v_extradatacomputers`.`Ignore Disk` or `v_extradatacomputers`.`Ignore Intrusion` or `v_extradatacomputers`.`Ignore Usability` or `v_extradatacomputers`.`Ignore Services` or `v_extradatacomputers`.`Ignore Updates` or `v_extradatacomputers`.`Ignore Event Logs`) = 1) or ((`v_extradataclients`.`Go Live Date` < (now() + interval -(1) month)) and (not(NULL))))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `plugin_hc_ksbz_client_exclusions`
--

/*!50001 DROP VIEW IF EXISTS `plugin_hc_ksbz_client_exclusions`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `plugin_hc_ksbz_client_exclusions` AS (select `clients`.`ClientID` AS `ClientID`,`clients`.`Name` AS `Client Name`,`v_extradataclients`.`Team Assignment` AS `Team Assignment`,`v_extradataclients`.`Exclude Reporting` AS `Ignore - Non Contractual Services`,`v_extradataclients`.`Ignore Antivirus` AS `Ignore Antivirus`,`v_extradataclients`.`Ignore Disk` AS `Ignore Disk`,`v_extradataclients`.`Ignore Intrusion` AS `Ignore Intrusion`,`v_extradataclients`.`Ignore Usability` AS `Ignore Usability`,`v_extradataclients`.`Ignore Services` AS `Ignore Services`,`v_extradataclients`.`Ignore Updates` AS `Ignore Updates`,`v_extradataclients`.`Ignore Event Log` AS `Ignore Event Log`,`v_extradataclients`.`Go Live Date` AS `Go Live Date`,`v_extradataclients`.`Exclusion Comments` AS `Exclusion Comments` from (`clients` join `v_extradataclients` on((`clients`.`ClientID` = `v_extradataclients`.`clientid`))) where (((`v_extradataclients`.`Exclude Reporting` or `v_extradataclients`.`Ignore Antivirus` or `v_extradataclients`.`Ignore Disk` or `v_extradataclients`.`Ignore Intrusion` or `v_extradataclients`.`Ignore Usability` or `v_extradataclients`.`Ignore Services` or `v_extradataclients`.`Ignore Updates` or `v_extradataclients`.`Ignore Event Log`) = 1) or (((STR_TO_DATE(`v_extradataclients`.`go live date`, '%m/%d/%Y') BETWEEN DATE_ADD(NOW(), INTERVAL -30 DAY) AND NOW())))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-25 15:30:56
