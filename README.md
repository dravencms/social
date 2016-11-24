# Dravencms Social module

This is a simple Social module for dravencms

## Instalation

The best way to install dravencms/social is using  [Composer](http://getcomposer.org/):


```sh
$ composer require dravencms/social:@dev
```

Then you have to register extension in `config.neon`.

```yaml
extensions:
	social: Dravencms\Social\DI\SocialExtension
```
