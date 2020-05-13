# Blipr Platform
 
## Set up Blipr project 🔴

### Step 1: Installations

1. Install [Virtualbox](https://www.virtualbox.org/wiki/Downloads) for your OS.
2. Install [Vagrant](https://www.vagrantup.com/downloads.html) for your OS.

### Step 2: Pull Repo in new folder

``` in new folder
git pull git@github.com:nonkelRay/Blipr-Platform.git
```

### Step 3: Composer install

``` in project root
composer install
```

### Step 3: Generate the Vagrantfile and Homestead.yaml file in your project root

``` MAC OS
php vendor/bin/homestead make
```

``` Windows
vendor\bin\homestead make
```

### Step 4: Sart Vagrant machine and login

``` Start vagrant machine
vagrant up
```

``` login to vagrant machine
vagrant ssh
```
