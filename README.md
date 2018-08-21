# Artisan Static

An advanced starter template for building a static Jigsaw blog hosted on Netlify with analytics, comments, code highlighting, a contact form, a CMS, and more.

This template has extremely minimal CSS.

## General details

- Static site generator: [Jigsaw](http://jigsaw.tighten.co) (Laravel Blade templates)
- Hosting: [Netlify](https://www.netlify.com)
- CMS: [Netlify CMS](https://www.netlifycms.org)
- Image hosting: [Cloudinary](https://cloudinary.com)
- Has Google Analytics
- Code highlighting: [highlight.js](https://github.com/highlightjs/highlight.js)
- Has Facebook Open Graph and Twitter Card meta tags
- Comments: [Disqus](https://disqus.com)
- Contact form: [Jumprock](https://jumprock.co)

## Getting started

Use our deploy button to get your own copy of the repository.

[![Deploy to Netlify](https://www.netlify.com/img/deploy/button.svg)](https://app.netlify.com/start/deploy?repository=https://github.com/raniesantos/artisan-static&stack=cms)

This will setup everything needed for running the CMS:

- A new repository in your GitHub account with the code
- Full Continuous Deployment to Netlify's global CDN network
- Control users and access with Netlify Identity
- Manage content with Netlify CMS

The email address associated with your Netlify account will receive an email inviting you as an
Identity user - click Accept in the email to set your new password, then navigate to `/admin` on
your site to log in.

Now you're all set, and you can start editing content!

## Local development

Clone this repository and run:

```shell
$ composer install
$ yarn install
$ yarn watch
```

Your browser will open [localhost:3000](http://localhost:3000/) automatically.

## Configuration

The default posts included in this template contain short guides on how to configure or implement some of its features.

When you use the 3rd-party services recommended by this template, make sure to read the docs of that specific service.
