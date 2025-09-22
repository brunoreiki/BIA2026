# Self with capability enrol plugin
Version: 1.0 (November 2022)

Author: Astor Bizard

This software is part of the Caseine project.  
This software was developped with the support of the following organizations:  
- Université Grenoble Alpes  
- Institut Polytechnique de Grenoble

## Description
The "Self with capability" enrol plugin is an enrolment method that allows users to enrol themselves in courses, under restrictions on capabilities.  

It behaves like the standard self enrolment plugin, and features roughly the same options.  
Additionally, Self with capability enrolment methods can be configured to require __capabilities__ that must be held by users in order to enrol themselves into courses.

When capabilities requirement are fulfilled, it behaves like self enrolment.  
![Example of enrolment method form when capabilities requirement are fulfilled and user can enrol.](metadata/screenshots/enrol_ok.png)

When capabilities requirement are not fulfilled, users cannot enrol.  
![Example of enrolment method form when capabilities requirement are not fulfilled and user can not enrol.](metadata/screenshots/enrol_nocap.png)

## Other features
A plugin administration setting allows to completely hide enrol forms when users do not have permissions to enrol (instead of displaying forms with message explaining why it is unavailable).

## Useful informations
Please note that the required capabilities set in the enrolment method setup need to be capabilities held by some users at system or course category level (as they will often not be enrolled in the course yet, so they won't have capabilities linked to their role within the course).  

About plugin installation: every enrolment plugin is disabled by default upon installation. To enable it, go to &lt;yourmoodle&gt;/admin/settings.php?section=manageenrols.