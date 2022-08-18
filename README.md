INTRODUCTION
------------
Customers migrating from Drupal 7 devportal to Drupal 9 were facing limitations due to Drupal's field machine name as stated in b/235425871.

Edge apps custom attribute module allows admin to map edge custom attribute with drupal field. This module is generally used when the edge custom attribute field name is more the 32 characters or contains uppercase characters. As these field cannot be created in drupal, this module allows the admin to add the mapping for those fields.

INSTALLATION
------------

Required step:

Enable the module as you normally would. See:
https://www.drupal.org/docs/8/extending-drupal-8/installing-modules


CONFIGURATION
-------------

* Go to admin/config/edge_apps_custom_attribute/adminsettings
The mapping parameters are supplied as a comma separated key value pair for example:
FIELDNAME,MAPPED NAME

For example, you have a field called 'field_name_custom' and you need to change it to 'Field_Name_Custom_xxx_000' in the Mapping field textarea, you need to enter one key value pair per line as below:

field_name_custom,Field_Name_Custom_xxx_000
field_name_custom1,Field_Name_Custom_xxx_001
