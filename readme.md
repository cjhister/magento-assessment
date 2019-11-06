## Take Home Assessment: A Simple Message Queue

Please read the entire readme, there are necessary details throughout the entire document. Thank you.


### Instructions:
This is a 2.3.x Magento 2 CE installation. Please create a module with the namespace `Assessment\SimpleQueue` under `app/code`. This module should use a native [Magento Message Queue](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/message-queues/message-queues.html) to dispatch a message including the sku of the product every time a product's page is viewed. Then, consume the message and log that sku to a magento log file named `consumer.log`.

_Note: A MySQL queue is fine, AMQP/RMQ isn't necessary since the adapter is abstracted._
___
### Local Environment:
When you run `composer install` all of the files you're used to seeing in an M2 repo will generate, they're intentionally omitted and ignored by git.

There is a local docker-compose environment available to you inside the [`.docker`](https://github.com/dambrogia/magento-assessment/tree/master/.docker) directory. There is also a very direct install script at `install.sh`. You are not required to use any of these, but when your code is reviewed this will be the environment it will be tested on. If you have a problem with the local environment, please open an issue on the repo.

##### A quick tid-bit on docker volumes:
If you do not run a linux desktop as your local machine, you will receive _much_ better performance using [mutagen](https://github.com/quodlibet/mutagen) to sync your files rather than docker's native volumes. There is a small comment with instructions in [`docker-compose.yml`](https://github.com/dambrogia/magento-assessment/blob/master/.docker/docker-compose.yml#L17)

##### Gettings started:
You can view the [`.travis.yml`](https://github.com/dambrogia/magento-assessment/blob/master/.travis.yml) file to see how to spin up docker.
If you are unfamiliar with Travis, basically you need a composer auth.json file for the install, docker-compose (the install intructions there are for an ubuntu 16 travis-ci runner) and then you can boot your docker containers and complete the install of the local environment (xdebug included).

___
### How to submit?

Create a pull request from a branch named `assessment/<your_name>` so the diff of your contributions can be reviewed. Please edit this instructions on how I can run your code and manually test it.

___
### What am I being assessed for?
The quality of your code will be reviewed including code style, readability, performance, security and best practices. Functionally this is a pretty straight forward pass/fail assessment but there are enough moving pieces to show your attention to detail. Please follow PSRs: 3, 4 and 12.

To be very transparent, attention to detail and thoroughness are the most sought after remarks. Are your instructions clear? Doo you comment your code in complex areas? Is your formatting consistent? Did you lint your code? Do you have errors when I try to install? What you submit should be _very_ straight forward to test and confirm that it works. If this simple assessment can't be rolled out efficiently, it only makes sense that production rollouts will only be more challenging.

On the other hand, this is only an assessment and this code will never reach a production environment. Your time is valuable and very much appreciated. If you can cut a corner and save upwards of 20-30 minutes, write a comment on why you did what you did and how it could be better if you had more time.
___
### Instructions:
Add step by step instructions here on how to mindlessly walk through your module.
