# Project Web

Creation of an **E-Commerce** Site for the BDE Association.

## Languages used :

1. HTML
2. CSS
3. JavaScript
4. PHP

Second year of precatory cycle at CESI computer engineering program

Created by: **Varjavandi Thomas**, **Brisé Mathéo** et **Guiochet Titouan**.

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
