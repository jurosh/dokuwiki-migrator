# dokuwiki-migrator
Dokuwiki simple migration

https://packagist.org/packages/jurosh/dokuwiki-html-migrate

composer install jurosh/dokuwiki-html-migrate

Example in index.php

```php

use jurosh\migrate\dokuwiki\WikiMigrator as WikiMigrator;

//require_once __DIR__ . '\vendor\autoload.php';

require_once 'src/loader.php';

require 'example.php';

$example = new Example();

$user = new WikiMigrator();

$user->transform($example);

```
