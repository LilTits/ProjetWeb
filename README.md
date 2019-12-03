# Project Web

Creation of an **E-Commerce** Site for the BDE Association in less than two weeks.

## Languages used :

1. HTML
2. CSS - Sass
3. JavaScript - JQuery
4. PHP - Laravel 5.4

Second year of precatory cycle at CESI computer engineering program

Created by: **Varjavandi Thomas**, **Brisé Mathéo** et **Guiochet Titouan**.

## Files we modified :

1. app/Http/Controllers

Everithing in the controller was created by us.

2. app/Mail

Created for mail use.

3. app/Permisions

Created for future version

4. app

All the single files are the models that we created

5. database/migrations

Files for the creation opf the database

6. database/seeds

Add fake data to test the database and the website

7. ressources/assets/sass

_custom.scss - All our css for the website
app.scss - File that integrate our css

8. ressources/views

All the subfolders are the actual pages of the website.

9. routes

web.php - Link between view and controller

10. storage/app/public/image

The subfolders contains all our image for the website


## Technical choice:

### Why using a framework

With our little allocated time, we decided to start using Laravel, it was the very first time for us we really use a Php Framework for a web project. We certainly lost time by learning how to use and master Laravel but we thinks it was worth it, when you really used to the functioning of the Framework, it's a lot easier to implements things in your app. Laravel community offer's a lot of pre-made package that you can install and use, in our case, we use one for the cart and one for the forms.

## Standards & Practices:

Within the project certain standards and practices will be used by the aforementioned creators to maintain a level of organization and quality within the projects source code.

### File Names

- **camelCase** will be used to name any files within the project 
- All file names will be **clear and concise** in their representation of the file contents
- **Singular** only, no plural words within names

### Database Tables & Fields

- All Database names will follow the **Lezynski Naming Convention** found bellow
- **Singular only**, no plural words within names

- Tables will be named as follows
  - [**Prefix**] + [**tbl**] + [**TableName**] + [**Suffix**]
  - e.g. tblUserAdresses or zztblUserAdresses
  
- Fields will be named as follows
  - [**Prefix**] + [**Tag**] + [**TableName**] + [**Suffix**]
  - e.g idsUser or dtmUserJoined
  - Longer Table Names can be abrivated to reduce Field name size (tblPermissionAssignmentByRole -> PABR)

LNC Reference: https://en.wikipedia.org/wiki/Leszynski_naming_convention

#### Component Description

|Component|Description|Example|
| --- | --- | --- |
|Prefix(es)	|A lowercase letter that adds extra information to the tag	|p for Public variable
|Tag	|A three-letter sequence indicating the object type	|tbl for table
|TableName	|A word or two describing the table. If several words are used, each starts with a capital letter, and there are no spaces between them	|OutlookContacts – contacts imported from Outlook
|Suffix (RVBA), Qualifier (LNC)	|A word giving more specific information about an object	|ByDate – the data is sorted by date


#### Prefixes

|Object|Tag|
| --- | --- |
|Incomplete objects, backup objects, or objects that are under development|_ or – (In some versions of Access, dashes sort to the beginning of the database object list.)|
|Hidden system objects|zh|
|Displayed system objects|zs|
|Programmatically created temporary objects|zt|
|Backup copies of objects, for later copying or reuse|zz|

#### Tags

|Object|Tag|
| --- | --- |
|Autonumber (random non-sequential)	|idn|
|Autonumber (replication ID)	|idr|
|Autonumber (sequential)	|ids|
|Binary	|bin|
|Byte	|byt|
|Currency	|cur|
|Date/Time	|dtm|
|Double	|dbl|
|Hyperlink	|hlk|
|Integer	|int|
|Long	|lng|
|Memo	|mem|
|OLE	|ole|
|Single	|sng|
|Text (character)	|chr|
|Yes/No (Boolean)	|ysn|
|Images/Image URL |img|
|Type (user-defined)|typ|
|Counter|cnt|

