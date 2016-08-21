# Run Laravel on Docker (for developments only)

This is just a small start point if you want to run laravel on docker without creating new Vagrant image.

## Requirements

1. Install docker locally ( I've used docker for mac, but I guess it shoudl work any where you have docker installed ).
1. PHP-fpm, nginx, mysql, and redis docker images, and dont worry the script will download them for you.

## Usage

1. You can use the `exec` file to execuete the commands on docker, but make sure that you give it execute permission `chmod +x exec`.
1. To install the libraries using composer you execute `./exec app_1 composer.phar install`.
1. To run any `artisan` command you can execute it like `./exec app_1 artisan list`. 

## Thanks

1. Thanks for [Kyle Ferguson](https://kyleferg.com/laravel-development-with-docker/) for his post as it was the starting point for me.
1. Thanks for [Dayle Rees](https://twitter.com/daylerees/status/767101286663725059) for give me the idea of the exec shell script.
1. Thanks for everyone who helped to create those nice docker images.

## License

licensed under the [MIT license](http://opensource.org/licenses/MIT).