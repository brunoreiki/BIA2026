# Temporary access enrol plugin
Version: 1.0 (September 2022)

Author: Astor Bizard

This software is part of the Caseine project.  
This software was developped with the support of the following organizations:  
- Université Grenoble Alpes  
- Institut Polytechnique de Grenoble

## Introduction
The "Temporary access" enrol plugin is an enrolment method that allows users to temporarily access a course with a specific role without being actually enrolled in it.  

![Temporary access instance example](metadata/screenshots/form_password_dimmed.png)

### Why?
We had a dream: let the teaching community of our Moodle platform freely access some courses, in order to be able to copy some resources and activities (using the [Sharing Cart block](https://moodle.org/plugins/block_sharing_cart), a great tool!). This copy is only allowed for courses and modules that are explicitely shared by their creators, but that is another story.  
To do so, we needed a way to allow a set of users to access courses, without being actually enrolled in them.  
This plugin was developed with this goal, and is shared as is, in hope it might be useful.

## What kind of enrolment is that exactly?
This enrolment method shares some features with both [Self enrolment](https://docs.moodle.org/en/Self_enrolment) and [Guest access](https://docs.moodle.org/en/Guest_access):  
- users are able to access a course by themselves,  
- a password can be set to limit access to the enrolment method,  
- a specific role will be assigned to users accessing the course via the enrolment method,  
- the assigned role is temporary, and users will be allowed to access the course without being enrolled.

In addition,  
- some __capabilities__ can be set as required to use the enrolment method. For example, in our use, we set it to a capability that we give to all members of the teaching community.

![Temporary access enrolment method setup form](metadata/screenshots/editform.png)

## Other features
This enrolment method is compatible with other existing enrolment methods in a course.  
A user enrolled in such a course will still be able to switch to the temporary role.  

Case where the user is already enrolled (using a self enrolment):  
![An entry is added in the course menu to switch to temporary role.](metadata/screenshots/tempswap.png)  
Case where the user is already enrolled and has switched to the temporary role:  
![An entry is added in the course menu to switch back to their normal role.](metadata/screenshots/swapback.png)  
Case where the user only has the temporary role and wants to enrol:
![An entry is added in the course menu to go to the enrolment page.](metadata/screenshots/returntoenrol.png)

Also, a custom enrolment icon can be configured in the plugin settings!

![You can set any fontawesome icon or custom image from the plugin administration.](metadata/screenshots/customiconsetting.png)

## Useful informations
Please note that the required capabilities set in the enrolment method setup need to be capabilities held by some users at system or course category level (as they will often not be enrolled in the course yet, so they won't have capabilities linked to their role within the course).  
**Important**: for this enrolment method to work, the role assigned by the enrolment instance needs to have the "View courses without participation - moodle/course:view" capability. This is needed because this is neither a guest access nor an actual enrolment.

About plugin installation: every enrolment plugin is disabled by default upon installation. To enable it, go to &lt;yourmoodle&gt;/admin/settings.php?section=manageenrols.