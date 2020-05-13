# Blipr Platform
 
## Set up Blipr project 🔴

### Step 1: Installations

1. Install [Virtualbox](https://www.virtualbox.org/wiki/Downloads) for your OS.
2. Install [Vagrant](https://www.vagrantup.com/downloads.html) for your OS.

### Step 2: Clone Repo in new folder

in new folder
```console
git clone git@github.com:nonkelRay/Blipr-Platform.git
```

### Step 3: Composer install

in project root
```console 
composer install
```

### Step 3: Generate the Vagrantfile and Homestead.yaml file in your project root

Mac
```console 
php vendor/bin/homestead make
```

Windows 
```console 
vendor\bin\homestead make
```

### Step 4: Sart Vagrant machine and login

Start vagrant machine
```console 
vagrant up
```

login to vagrant machine
```console
vagrant ssh
```
