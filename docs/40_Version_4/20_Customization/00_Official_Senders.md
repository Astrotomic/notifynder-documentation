## Official Senders

We have created some custom senders for typical use-cases, these senders are official supported by us and come with the same flexibility like the core-package itself.

If you want any other sender or want to provide written code for one please [create an issue](https://github.com/fenos/Notifynder/issues/new?milestone=Senders) in the core-package. If you have any questions or feature-wishes for an existing one you can create an issue in the sender-repo.

### E-Mail Sender

[![Release](https://img.shields.io/github/release/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-email/releases)
[![Issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-email.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-email/issues)

With this one you can send notifications as text message via E-Mail.

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendEmail();
```

### Slack Sender

[![Release](https://img.shields.io/github/release/astrotomic/notifynder-sender-slack.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-slack/releases)
[![Issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-slack.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-slack/issues)
[![Docs](https://img.shields.io/badge/Docs-Slack-lightgrey.svg?style=flat-square)](https://slack.com/developers)

With this one you can send notifications as text message via Slack.

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendSlack();
```

### MessageBird Sender

[![Release](https://img.shields.io/github/release/astrotomic/notifynder-sender-messagebird.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-messagebird/releases)
[![Issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-messagebird.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-messagebird/issues)
[![Docs](https://img.shields.io/badge/Docs-MessageBird-lightgrey.svg?style=flat-square)](https://developers.messagebird.com)

With this one you can send notifications as SMS or Voice message via MessageBird.

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendMessageBirdSms();
           
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendMessageBirdCall();
```

### Redis Sender

[![Release](https://img.shields.io/github/release/astrotomic/notifynder-sender-redis.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-redis/releases)
[![Issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-redis.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-redis/issues)
[![Docs](https://img.shields.io/badge/Docs-Redis-lightgrey.svg?style=flat-square)](https://laravel.com/docs/5.1/redis#pubsub)

With this one you can send notifications as json array message via redis as live messages.

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendRedis();
```

### Twilio Sender

[![Release](https://img.shields.io/github/release/astrotomic/notifynder-sender-twilio.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-twilio/releases)
[![Issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-twilio.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-twilio/issues)
[![Docs](https://img.shields.io/badge/Docs-Twilio-lightgrey.svg?style=flat-square)](https://www.twilio.com/docs/)

With this one you can send notifications as SMS message via Twilio.

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendTwilio();
```

### Nexmo Sender

[![Release](https://img.shields.io/github/release/astrotomic/notifynder-sender-nexmo.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-nexmo/releases)
[![Issues](https://img.shields.io/github/issues/astrotomic/notifynder-sender-nexmo.svg?style=flat-square)](https://github.com/astrotomic/notifynder-sender-nexmo/issues)
[![Docs](https://img.shields.io/badge/Docs-Nexmo-lightgrey.svg?style=flat-square)](https://docs.nexmo.com/)

With this one you can send notifications as SMS message via Nexmo.

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->sendNexmo();
```