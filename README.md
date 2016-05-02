# Contact Us
![Banner](http://i.imgur.com/QRBLNQN.png)

A simple, complete and modular contact form for [OctoberCMS
](https://octobercms.com) by DevINX. Original work by [Lamin Sanneh (Flexi Contact)](https://github.com/LaminSanneh/Octobercms-Flexi-Contact-Plugin).

The goal of this plugin is to accommodate the user who wants more functionnality.

# Installation or Setup

> If you upgrade from Flexi Contact, we recommand to read the [Upgrade guide](https://github.com/DevINX/oc-contactus/wiki/Upgrade-guide) to learn the changes between the two plugins.

1. Go to system on the main menus in your backend.
2. Click on the settings subsection.
3. Under the **Marketing** area, there should be a plugin setting called "Contact Us Plugin" with an email icon, click on that.
4. The fields with a red asterisk should be filled. The others are optional

# Usage
After doing the setup steps, you can use the contact form in two ways:

###1. Using the component
- The plugin should display a component on the components tab on the cms main menu.
- You can include the component like any other component, no customization needed.
- The component has a default markup as shown below and depends on bootstrap.
- You can customize the forms placeholder in the settings (_see [Custom Placeholder](https://github.com/DevINX/oc-contactus/wiki/Custom-placeholder)_)
- You have to add the dependencies in order to make work the form (_see Dependencies_)

This will add to the form to the page.

> Please note that the default markup provided by the form component relies on bootstrap and it's classes for styling. If you rely on it, you must make sure that bootstrap is loaded for it to be properly styled. I encourage you to style it using your own custom css to fit the overall style of your website. If you want the bootstrap class, check the **Inject Bootstrap Assets** option in the component.

###2. Using custom markup
See [Custom markup](https://github.com/DevINX/oc-contactus/wiki/Custom-markup) for more information.

# Dependencies
In order to make the form work, you need to inject the dependencies. Add this to your page :
```
{% framework %}
{% framework extras %}
```
