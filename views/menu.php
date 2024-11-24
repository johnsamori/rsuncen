<?php

namespace PHPMaker2025\rsuncen2025;

// Navbar menu
$topMenu = new Menu("navbar", true, true);
echo $topMenu->toScript();

// Sidebar menu
$sideMenu = new Menu("menu", true, false);
$sideMenu->addMenuItem(4, "mi_home", $Language->menuPhrase("4", "MenuText"), "home", -1, substr("mi_home", strpos("mi_home", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}home.php'), false, false, "fa-home", "", false, true);
$sideMenu->addMenuItem(32, "mci_Referensi", $Language->menuPhrase("32", "MenuText"), "", -1, substr("mci_Referensi", strpos("mci_Referensi", "mi_") + 3), true, false, true, "fa-book", "", false, true);
$sideMenu->addMenuItem(35, "mi_doctors", $Language->menuPhrase("35", "MenuText"), "doctorslist", 32, substr("mi_doctors", strpos("mi_doctors", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}doctors'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(40, "mi_rooms", $Language->menuPhrase("40", "MenuText"), "roomslist", 32, substr("mi_rooms", strpos("mi_rooms", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}rooms'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(33, "mci_Data", $Language->menuPhrase("33", "MenuText"), "", -1, substr("mci_Data", strpos("mci_Data", "mi_") + 3), true, false, true, "fa-book", "", false, true);
$sideMenu->addMenuItem(38, "mi_patients", $Language->menuPhrase("38", "MenuText"), "patientslist", 33, substr("mi_patients", strpos("mi_patients", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}patients'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(34, "mi_appointments", $Language->menuPhrase("34", "MenuText"), "appointmentslist", 33, substr("mi_appointments", strpos("mi_appointments", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}appointments'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(36, "mi_hospitalization", $Language->menuPhrase("36", "MenuText"), "hospitalizationlist", 33, substr("mi_hospitalization", strpos("mi_hospitalization", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}hospitalization'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(37, "mi_medical_records", $Language->menuPhrase("37", "MenuText"), "medicalrecordslist", 33, substr("mi_medical_records", strpos("mi_medical_records", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}medical_records'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(39, "mi_pharmacy", $Language->menuPhrase("39", "MenuText"), "pharmacylist", 33, substr("mi_pharmacy", strpos("mi_pharmacy", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}pharmacy'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(41, "mi_transactions", $Language->menuPhrase("41", "MenuText"), "transactionslist", 33, substr("mi_transactions", strpos("mi_transactions", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}transactions'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(16, "mi_theuserprofile", $Language->menuPhrase("16", "MenuText"), "theuserprofilelist", -1, substr("mi_theuserprofile", strpos("mi_theuserprofile", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}theuserprofile'), false, false, "fa-user", "", false, true);
$sideMenu->addMenuItem(5, "mi_help_categories", $Language->menuPhrase("5", "MenuText"), "helpcategorieslist", -1, substr("mi_help_categories", strpos("mi_help_categories", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}help_categories'), false, false, "fa-book", "", false, true);
$sideMenu->addMenuItem(6, "mi_help", $Language->menuPhrase("6", "MenuText"), "helplist?cmd=resetall", 5, substr("mi_help", strpos("mi_help", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}help'), false, false, "fa-book", "", false, true);
$sideMenu->addMenuItem(13, "mci_Terms_and_Condition", $Language->menuPhrase("13", "MenuText"), "javascript:void(0);|||getTermsConditions();return false;", 5, substr("mci_Terms_and_Condition", strpos("mci_Terms_and_Condition", "mi_") + 3), true, false, true, "fas fa-cannabis", "", false, true);
$sideMenu->addMenuItem(14, "mci_About_Us", $Language->menuPhrase("14", "MenuText"), "javascript:void(0);|||getAboutUs();return false;", 5, substr("mci_About_Us", strpos("mci_About_Us", "mi_") + 3), true, false, true, "fa-question", "", false, true);
$sideMenu->addMenuItem(12, "mci_ADMIN", $Language->menuPhrase("12", "MenuText"), "", -1, substr("mci_ADMIN", strpos("mci_ADMIN", "mi_") + 3), true, false, true, "fa-key", "", false, true);
$sideMenu->addMenuItem(1, "mi_users", $Language->menuPhrase("1", "MenuText"), "userslist?cmd=resetall", 12, substr("mi_users", strpos("mi_users", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}users'), false, false, "fa-user", "", false, true);
$sideMenu->addMenuItem(3, "mi_userlevels", $Language->menuPhrase("3", "MenuText"), "userlevelslist", 12, substr("mi_userlevels", strpos("mi_userlevels", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}userlevels'), false, false, "fa-tags", "", false, true);
$sideMenu->addMenuItem(2, "mi_userlevelpermissions", $Language->menuPhrase("2", "MenuText"), "userlevelpermissionslist", 12, substr("mi_userlevelpermissions", strpos("mi_userlevelpermissions", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}userlevelpermissions'), false, false, "fa-file", "", false, true);
$sideMenu->addMenuItem(8, "mi_settings", $Language->menuPhrase("8", "MenuText"), "settingslist", 12, substr("mi_settings", strpos("mi_settings", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}settings'), false, false, "fa-tools", "", false, true);
$sideMenu->addMenuItem(7, "mi_languages", $Language->menuPhrase("7", "MenuText"), "languageslist", 12, substr("mi_languages", strpos("mi_languages", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}languages'), false, false, "fa-flag", "", false, true);
$sideMenu->addMenuItem(15, "mi_announcement", $Language->menuPhrase("15", "MenuText"), "announcementlist", 12, substr("mi_announcement", strpos("mi_announcement", "mi_") + 3), AllowListMenu('{D761F21F-459E-47D0-A0E6-D494AD02D55B}announcement'), false, false, "fas fa-bullhorn", "", false, true);
echo $sideMenu->toScript();
