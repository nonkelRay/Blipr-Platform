# Blipr Platform
 
## Set up Blipr project 🔴

### Step 1: Installations

1. Install [Virtualbox](https://www.virtualbox.org/wiki/Downloads) for your OS.
2. Install [Vagrant](https://www.vagrantup.com/downloads.html) for your OS.

### Step 2: Clone Repo in new folder

In new folder
```console
git clone https://github.com/nonkelRay/Blipr-Platform.git
```

### Step 3: Composer install

In project root
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

### Step 4: Start Vagrant machine and login

Start vagrant machine
```console 
vagrant up
```

if vagrant machine is not working try
```console 
vagrant provision
```

Login to vagrant machine
```console
vagrant ssh
```

Shut down vagrant machine
```console
vagrant halt 
```
### Step 5: Write frontend

Install node modules (in root folder)
```console
npm i
```

Before writing frontend 
```console
npm run watch (this will look for changes in de .sass en .js files)
```
