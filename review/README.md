#README

These files should be uploaded to a server which supports PHP and MySQLi. They contain fictional
database information which should be changed before implementing. All links shoud likewise be checked,
since they are relative and likely to vary depending on your server's file structure.

#DATABASE STRUCTURE

The database used in this implementation has a table called "Certificates" which contains 4 rows:
ID:			int			The primary key and index.
FirstName:	varchar		First name of participant.
LastName:	varchar		Last name of participant.
FileName:	varchar		The name of the certificate file, pre-generated, and stored on server.