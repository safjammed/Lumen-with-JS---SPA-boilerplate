![image](https://user-images.githubusercontent.com/14005698/60100332-58e9ce00-977b-11e9-90f0-34f127fde719.png)



# Lumen-with-JS---SPA-boilerplate
A boilerplate which will enable rapid development of Single page application and others.
The stripped down version of laravel which is lumen is great for api development since its a very lightweight and straightforward 
framework. Great for API development and easy deployment. The similarity with laravel is uncanny.
So, I have thought that it would be great for the Single page application development. I am primarily a react developer.
This is a slimmed down package of lumen with any frontend Javascript support. This boilerplate has all. Just get it install it and you're on the 
right track to develop and deploy any Single page applications which are heavily dependent  on API

## Included with the package
- Superfast Lumens framework
- Webpack for bundling 
- No specific Javascript Scaffolding
- Laravel Mix for Javascript compiling and bundling among others.
- Babel transcoder for ES6 (React Preset) -  change it anytime from package.json


### Why Lumen and Why not laravel?
![image](https://user-images.githubusercontent.com/14005698/60100569-cf86cb80-977b-11e9-95c4-a157d1656bb1.png)

Laravel is great for backend development but Lumen is explicitly made for building API and server side performance.
Lumen is basically laravel with the bare-minimum features. You can add anything laravel has to offer with a little to nothing amount of work. 
That way you'll get just the absolute necessary features you need to have with you. 

Single page applications are heavily dependant on APIs. This will give the application an extra edge on performance and developer freedom


### How to get started?
 You need nodejs and composer installed. Clone this repo and change directory into it.
 Just setup the `.env` file,
 run `php artisan key:generate` to generate an application key.
 `npm install` to install the packages.
 `composer update` to install the composer packages. You are ready.
 
 run `npm run` to compile and transcode the javascipt. 
 To keep the laravel mix to keep looking for the changes you are making on the javascipt files run `npm run watch`
 
 Finally, start the server using `php -S localhost:8000 -t public`
 
 And voila!


###### I would always love to take questions and suggestions. to collab with me or hire me for your next big project contact me: `safayatjamil27@gmail.com`
 