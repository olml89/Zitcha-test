# Coding Task for job candidates

Author: Sam Anthony

### Application Description

This is a very simple application which can send a notification to the website administrator. At the moment it supports
the ability to send notifications via email, or via Slack.

This application is invoked via the PHP CLI, e.g:

```
# Send notification via Slack
php send-notification.php slack "This is the notification"

# Send notification via email
php send-notification.php email "This is the notification"
```

### Task

It has been decided that eventually, this application will need to support a multitude of notification 
providers (e.g. WhatsApp, SMS, Telegram, etc).

A senior developer has reviewed this project and made the following observations:
* They feel the current implementation will not be maintainable once there are more notification providers supported.
* They feel the application should be refactored to utilize dependency injection to improve the usability and 
testability of the code.
* The coding style/naming conventions are not consistent. It should be tidied up to be more consistent and
use PSR-12 coding style.

Please refactor this code based on the senior developers observations.
Feel free to discuss you changes with the interviewers as you go.
You can ask the interviewers for clarification if needed.