---
layout: post
title: Integrating FTP with a Jekyll site
date: 2014-03-20
tags: Glynn Web-Deployment Jekyll
---
Today I wanted to shed light on an issue facing some Jekykll users like myself, who host their blogs on an external web server somewhere: dealing with FTP. It's not practical to have to upload a new `_site` folder every time to you make a change or complete a post, whether you think of it in terms of time or bandwidth. Luckily, there's a solution n the form of a beloved Ruby gem, called [Glynn](https://github.com/dmathieu/glynn).

Glynn is a Ruby gem that you run from the Terminal; simply navigate to the directory your blog files sit in, just as you would with Jekyll, but instead, type `glynn`. Doing this will activate Glynn, which will build your website and upload it for you (assuming you have given it the details it neededs in the `config.yml` file).

The `config.yml` file looks something like this:

		# Glynn FTP Setup
		ftp_host: 'host.url'
		ftp_dir: '/'
		ftp_passive: false
		
		ftp_username: __________
		ftp_password: __________

It's not required that you specify the password in the file; if you don't, Glynn will simply prompt you for it in the Terminal whenever you issue the `Glynn` command.

This is a working solution, but it doesn't allow for caching. By this, I refer to the ability to not upload certain-files or folders, namely one's that don't change with new posts or content additions. For example, a folder full of special font files doesn't need to be uploaded to my webhost each time, as it is never changed, even when used. Unforutantely, Glynn doesn't allow a way around that - **yet**. 

All in all, Glynn's pretty damn amazing. That caching idea sounds like a good one though; maybe I'll learn Ruby just to be able to add that feature.  

