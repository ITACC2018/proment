LDAP Yapılandırma Örnekleri
===========================

Microsoft Active Directory
--------------------------

- Kullanıcı doğrulama
- Kullanıcı profili resmini Active Directory'den indirin
- Kullanıcı dilini LDAP özniteliğinden ayarlayın
- Kanboard rolleri Active Directory gruplarına eşlenir
- LDAP grup sağlayıcıları etkinleştirildi

```php
define('LDAP_AUTH', true);

define('LDAP_SERVER', 'my-ldap-server');
define('LDAP_PORT', 389);

define('LDAP_BIND_TYPE', 'proxy');
define('LDAP_USERNAME', 'administrator@Kanboard.local');
define('LDAP_PASSWORD', 'secret');

define('LDAP_USER_BASE_DN', 'CN=Users,DC=Kanboard,DC=local');
define('LDAP_USER_FILTER', '(&(objectClass=user)(sAMAccountName=%s))');

define('LDAP_USER_ATTRIBUTE_USERNAME', 'samaccountname');
define('LDAP_USER_ATTRIBUTE_FULLNAME', 'displayname');
define('LDAP_USER_ATTRIBUTE_PHOTO', 'jpegPhoto');
define('LDAP_USER_ATTRIBUTE_LANGUAGE', 'preferredLanguage');

define('LDAP_GROUP_ADMIN_DN', 'CN=Kanboard Admins,CN=Users,DC=Kanboard,DC=local');
define('LDAP_GROUP_MANAGER_DN', 'CN=Kanboard Managers,CN=Users,DC=Kanboard,DC=local');

define('LDAP_GROUP_PROVIDER', true);
define('LDAP_GROUP_BASE_DN', 'CN=Users,DC=Kanboard,DC=local');
define('LDAP_GROUP_FILTER', '(&(objectClass=group)(sAMAccountName=%s*))');
define('LDAP_GROUP_ATTRIBUTE_NAME', 'cn');
```


MemberOf yer paylaşımı ile OpenLDAP
------------------------------

Kullanıcı LDIF örneği:

```
dn: uid=manager,ou=Users,dc=Kanboard,dc=local
objectClass: top
objectClass: person
objectClass: organizationalPerson
objectClass: inetOrgPerson
uid: manager
sn: Lastname
givenName: Firstname
cn: Kanboard Manager
displayName: Kanboard Manager
mail: manager@Kanboard.local
userPassword: password
memberOf: cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local
```

Grup LDIF örneği:

```
dn: cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local
objectClass: top
objectClass: groupOfNames
cn: Kanboard Managers
member: uid=manager,ou=Users,dc=Kanboard,dc=local
```

Kanboard Konfigürasyonu:

- Kullanıcı doğrulama
- Kanboard rolleri LDAP gruplarıyla eşlenir
- LDAP grup sağlayıcıları etkinleştirildi

```php
define('LDAP_AUTH', true);

define('LDAP_SERVER', 'my-ldap-server');
define('LDAP_PORT', 389);

define('LDAP_BIND_TYPE', 'proxy');
define('LDAP_USERNAME', 'cn=admin,DC=Kanboard,DC=local');
define('LDAP_PASSWORD', 'password');

define('LDAP_USER_BASE_DN', 'OU=Users,DC=Kanboard,DC=local');
define('LDAP_USER_FILTER', 'uid=%s');

define('LDAP_GROUP_ADMIN_DN', 'cn=Kanboard Admins,ou=Groups,dc=Kanboard,dc=local');
define('LDAP_GROUP_MANAGER_DN', 'cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local');

define('LDAP_GROUP_PROVIDER', true);
define('LDAP_GROUP_BASE_DN', 'ou=Groups,dc=Kanboard,dc=local');
define('LDAP_GROUP_FILTER', '(&(objectClass=groupOfNames)(cn=%s*))');
define('LDAP_GROUP_ATTRIBUTE_NAME', 'cn');
```

Posix gruplarıyla OpenLDAP (memberUid)
--------------------------------------

Kullanıcı LDIF örneği:

```
dn: uid=manager,ou=Users,dc=Kanboard,dc=local
objectClass: inetOrgPerson
objectClass: posixAccount
objectClass: shadowAccount
uid: manager
sn: Lastname
givenName: Firstname
cn: Kanboard Manager
displayName: Kanboard Manager
uidNumber: 10001
gidNumber: 8000
userPassword: password
homeDirectory: /home/manager
mail: manager@Kanboard.local
```

Grup LDIF örneği:

```
dn: cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local
objectClass: posixGroup
cn: Kanboard Managers
gidNumber: 5001
memberUid: manager
```

Kanboard Konfigürasyonu:

- Kullanıcı doğrulama
- Kanboard rolleri LDAP gruplarıyla eşlenir
- LDAP grup sağlayıcıları etkinleştirildi

```php
define('LDAP_AUTH', true);

define('LDAP_SERVER', 'my-ldap-server');
define('LDAP_PORT', 389);

define('LDAP_BIND_TYPE', 'proxy');
define('LDAP_USERNAME', 'cn=admin,DC=Kanboard,DC=local');
define('LDAP_PASSWORD', 'password');

define('LDAP_USER_BASE_DN', 'OU=Users,DC=Kanboard,DC=local');
define('LDAP_USER_FILTER', 'uid=%s');

define('LDAP_GROUP_ADMIN_DN', 'cn=Kanboard Admins,ou=Groups,dc=Kanboard,dc=local');
define('LDAP_GROUP_MANAGER_DN', 'cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local');

// This filter is used to find the groups of our user
define('LDAP_GROUP_USER_FILTER', '(&(objectClass=posixGroup)(memberUid=%s))');

define('LDAP_GROUP_PROVIDER', true);
define('LDAP_GROUP_BASE_DN', 'ou=Groups,dc=Kanboard,dc=local');
define('LDAP_GROUP_FILTER', '(&(objectClass=posixGroup)(cn=%s*))');
define('LDAP_GROUP_ATTRIBUTE_NAME', 'cn');
```

GroupOfNames ile OpenLDAP
--------------------------

Kullanıcı LDIF örneği:

```
dn: uid=manager,ou=Users,dc=Kanboard,dc=local
objectClass: top
objectClass: person
objectClass: organizationalPerson
objectClass: inetOrgPerson
uid: manager
sn: Lastname
givenName: Firstname
cn: Kanboard Manager
displayName: Kanboard Manager
mail: manager@Kanboard.local
userPassword: password
```

Grup LDIF örneği:

```
dn: cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local
objectClass: top
objectClass: groupOfNames
cn: Kanboard Managers
member: uid=manager,ou=Users,dc=Kanboard,dc=local
```

Kanboard Konfigürasyonu:

- Kullanıcı doğrulama
- Kanboard rolleri LDAP gruplarıyla eşlenir
- LDAP grup sağlayıcıları etkinleştirildi

```php
define('LDAP_AUTH', true);

define('LDAP_SERVER', 'my-ldap-server');
define('LDAP_PORT', 389);

define('LDAP_BIND_TYPE', 'proxy');
define('LDAP_USERNAME', 'cn=admin,DC=Kanboard,DC=local');
define('LDAP_PASSWORD', 'password');

define('LDAP_USER_BASE_DN', 'OU=Users,DC=Kanboard,DC=local');
define('LDAP_USER_FILTER', 'uid=%s');

define('LDAP_GROUP_ADMIN_DN', 'cn=Kanboard Admins,ou=Groups,dc=Kanboard,dc=local');
define('LDAP_GROUP_MANAGER_DN', 'cn=Kanboard Managers,ou=Groups,dc=Kanboard,dc=local');

// This filter is used to find the groups of our user
define('LDAP_GROUP_USER_FILTER', '(&(objectClass=groupOfNames)(member=uid=%s,ou=Users,dc=Kanboard,dc=local))');

define('LDAP_GROUP_PROVIDER', true);
define('LDAP_GROUP_BASE_DN', 'ou=Groups,dc=Kanboard,dc=local');
define('LDAP_GROUP_FILTER', '(&(objectClass=groupOfNames)(cn=%s*))');
define('LDAP_GROUP_ATTRIBUTE_NAME', 'cn');
```
