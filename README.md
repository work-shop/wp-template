Wordpress Template for Custom Developments
--



This file repository contains core Wordpress files as well as the **Work-Shop** barebones foundation. As Wordpress is updated, our theme changes and becomes more comprehensive, and we refine our deployment workflow, this repository should be updated to reflect our most recent web philosophies.


### Basic setup for Development
Clone this file into a local server-root to begin development. Create a MySQL user and new database, and Install Wordpress as normal - editing ```wp-config.php``` to reflect these configurations. Our repo will not track changes to ```wp-config.php```; config files containing database users and passwords should **never** be pushed to the repository, as this is extremely insecure. Instead, each clone of the repository should simply be instantiated with its own, local ```wp-config.php```. This includes the production server, which will simply be a *production* branch of the website's repository.

### File Structure
In production, the ```.git``` directory always lives on the server above the webroot. This directory might also maintain database dumps, if these live under version control, as well. Any unrelated files on the server can simply ```.gitignore```'d.

### Summary
This repo should always contain:

```sh
  public_html
      wp-admin
        ...
      wp-content
        ...
      wp-includes
        ...
      ...

  sql_dump
      dump.sql
```

### *.htaccess* synching
Keeping files in ```wp-content/uploads``` in synch with the database is a good idea, so on local development environments, we can use the .htaccess rewrite rule located in ```wp-content/uploads``` to automate pulling content from the production server. In this template repo, that file is ```.gitignore```'d, but in production it can be downloaded, and pointed at the production server, or an ancillary server housing assets. see that file for more information. 
