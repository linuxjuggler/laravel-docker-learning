# Run Laravel on Docker (for developments only)

This is just a small start point if you want to run laravel on docker without creating new Vagrant image.

## Requirements

1. Install docker locally ( I've used docker for mac, but I guess it shoudl work any where you have docker installed ).
1. PHP-fpm, nginx, mysql, and redis docker images, and don't worry the script will download them for you.

## Usage

1. You can use the `exec` file to execute the commands on docker, but make sure that you give it execute permission `chmod +x exec`.
1. To install the libraries using composer you execute `./exec docker_laravel composer.phar install`.
1. To require a new library using composer you execute a command like `./exec docker_laravel composer.phar require league/flysystem-sftp`.
1. To run any `artisan` command you can execute it like `./exec docker_laravel artisan list`.

*PS:* the exec may not work as it should, esp if you have a lot of argument to send, and am still trying to figure the best way to rewrite the file.

## Thanks

1. Thanks for [Kyle Ferguson](https://kyleferg.com/laravel-development-with-docker/) for his post as it was the starting point for me.
1. Thanks for [Dayle Rees](https://twitter.com/daylerees/status/767101286663725059) for give me the idea of the exec shell script.
1. Thanks for everyone who helped to create those nice docker images.

## Note for windows users

For windows users, make sure that you have enabled the shared volume from docker engine before you run the script

![settings shared drives](https://docs.docker.com/docker-for-windows/images/settings-shared-drives.png)

## License

licensed under the [MIT license](http://opensource.org/licenses/MIT).
