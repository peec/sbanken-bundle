# PkjSbankenBundle for Symfony

Create symfony based php apps with integration to Sbanken.

Uses https://github.com/peec/sbanken library. See that for docs of usage.


# Install


Add to parameters.yml.dist:

```yaml
parameters:
    #.......
    sbanken_client_id: ~
    sbanken_client_secret: ~
    sbanken_customer_id: ~
```

Add to config.yml:

```yaml
pkj_sbanken:
    client_id: '%sbanken_client_id%'
    client_secret: '%sbanken_client_secret%'
    customer_id: '%sbanken_customer_id%'
```

Add to AppKernel.php:

```php
    new Pkj\Bundle\SbankenBundle\PkjSbankenBundle()
```

Run composer require

```
composer require pkj/sbanken-bundle:^1.0
```

You will be asked to fill in client_id, client_secret and customer_id. Get these from sbanken website. (customer_id is your person number).



# Usage

This bundle exposes a new service `pkj_sbanken.client` which you have access to getApi().

```
$api = $this->get('pkj_sbanken.client')->getApi();
$api->authorize(); // Get access token.
// etc.
// See https://github.com/peec/sbanken for available methods on $api.
```