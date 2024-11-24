<?php

namespace PHPMaker2025\rsuncen2025;

/**
 * User levels
 *
 * @var array<int, string, string>
 * [0] int User level ID
 * [1] string User level name
 * [2] string User level hierarchy
 */
$USER_LEVELS = [["-2","Anonymous",""],
    ["0","Default",""]];

/**
 * User roles
 *
 * @var array<int, string>
 * [0] int User level ID
 * [1] string User role name
 */
$USER_ROLES = [["-1","ROLE_ADMIN"],
    ["0","ROLE_DEFAULT"]];

/**
 * User level permissions
 *
 * @var array<string, int, int>
 * [0] string Project ID + Table name
 * [1] int User level ID
 * [2] int Permissions
 */
// Begin of modification by Masino Sinaga, September 17, 2023
$USER_LEVEL_PRIVS_1 = [["{D761F21F-459E-47D0-A0E6-D494AD02D55B}announcement","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}announcement","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}help","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}help","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}help_categories","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}help_categories","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}home.php","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}home.php","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}languages","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}languages","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}settings","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}settings","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}theuserprofile","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}theuserprofile","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}userlevelpermissions","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}userlevelpermissions","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}userlevels","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}userlevels","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}users","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}users","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}appointments","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}appointments","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}doctors","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}doctors","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}hospitalization","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}hospitalization","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}medical_records","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}medical_records","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}patients","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}patients","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}pharmacy","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}pharmacy","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}rooms","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}rooms","0","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}transactions","-2","0"],
    ["{D761F21F-459E-47D0-A0E6-D494AD02D55B}transactions","0","0"]];
$USER_LEVEL_PRIVS_2 = [["{D761F21F-459E-47D0-A0E6-D494AD02D55B}breadcrumblinksaddsp","-1","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}breadcrumblinkschecksp","-1","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}breadcrumblinksdeletesp","-1","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}breadcrumblinksmovesp","-1","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}loadhelponline","-2","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}loadaboutus","-2","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}loadtermsconditions","-2","8"],
					["{D761F21F-459E-47D0-A0E6-D494AD02D55B}printtermsconditions","-2","8"]];
$USER_LEVEL_PRIVS = array_merge($USER_LEVEL_PRIVS_1, $USER_LEVEL_PRIVS_2);
// End of modification by Masino Sinaga, September 17, 2023

/**
 * Tables
 *
 * @var array<string, string, string, bool, string>
 * [0] string Table name
 * [1] string Table variable name
 * [2] string Table caption
 * [3] bool Allowed for update (for userpriv.php)
 * [4] string Project ID
 * [5] string URL (for OthersController::index)
 */
// Begin of modification by Masino Sinaga, September 17, 2023
$USER_LEVEL_TABLES_1 = [["announcement","announcement","Announcement",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","announcementlist"],
    ["help","help","Help (Details)",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","helplist"],
    ["help_categories","help_categories","Help (Categories)",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","helpcategorieslist"],
    ["home.php","home","Home",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","home"],
    ["languages","languages","Languages",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","languageslist"],
    ["settings","settings","Application Settings",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","settingslist"],
    ["theuserprofile","theuserprofile","User Profile",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","theuserprofilelist"],
    ["userlevelpermissions","userlevelpermissions","User Level Permissions",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","userlevelpermissionslist"],
    ["userlevels","userlevels","User Levels",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","userlevelslist"],
    ["users","users","Users",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","userslist"],
    ["appointments","appointments","appointments",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","appointmentslist"],
    ["doctors","doctors","doctors",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","doctorslist"],
    ["hospitalization","hospitalization","hospitalization",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","hospitalizationlist"],
    ["medical_records","medical_records","medical records",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","medicalrecordslist"],
    ["patients","patients","patients",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","patientslist"],
    ["pharmacy","pharmacy","pharmacy",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","pharmacylist"],
    ["rooms","rooms","rooms",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","roomslist"],
    ["transactions","transactions","transactions",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","transactionslist"]];
$USER_LEVEL_TABLES_2 = [["breadcrumblinksaddsp","breadcrumblinksaddsp","System - Breadcrumb Links - Add",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","breadcrumblinksaddsp"],
						["breadcrumblinkschecksp","breadcrumblinkschecksp","System - Breadcrumb Links - Check",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","breadcrumblinkschecksp"],
						["breadcrumblinksdeletesp","breadcrumblinksdeletesp","System - Breadcrumb Links - Delete",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","breadcrumblinksdeletesp"],
						["breadcrumblinksmovesp","breadcrumblinksmovesp","System - Breadcrumb Links - Move",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","breadcrumblinksmovesp"],
						["loadhelponline","loadhelponline","System - Load Help Online",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","loadhelponline"],
						["loadaboutus","loadaboutus","System - Load About Us",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","loadaboutus"],
						["loadtermsconditions","loadtermsconditions","System - Load Terms and Conditions",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","loadtermsconditions"],
						["printtermsconditions","printtermsconditions","System - Print Terms and Conditions",true,"{D761F21F-459E-47D0-A0E6-D494AD02D55B}","printtermsconditions"]];
$USER_LEVEL_TABLES = array_merge($USER_LEVEL_TABLES_1, $USER_LEVEL_TABLES_2);
// End of modification by Masino Sinaga, September 17, 2023
