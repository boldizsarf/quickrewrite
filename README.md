# What is this?
This is a small project, about an easy and quick URL rewrite engine, based on PHP. You can add an index page, and more pages, with parameters. Its Apache2, and IIS compatible.

# Setup
Just drag the files to the website's root directory. I recommend to create a sub folder for the website. Thats it!

# Adding an index page
Go to the config.xml. In the config body, just create an index tag. You can specify the index file with the href attribute.

```xml
<config>
    <index href="yoursubfolder/index.php" />
</config>
```

# Adding a page
If you want to add a page, just use the page tag, in the config file. You can specify the name, with the name attribute, and you can specify the page file, with the href attribute.

```xml
<config>
    <page name="test" href="yoursubfolder/test.php" />
</config>
```

# Adding parameters

You can add params with the param tag, inside the page tag. You can define the param id, and the string's name. 
```xml
<config>
    <page name="test" href="yoursubfolder/test.php">
        <param id="2" string_name="param2" />
        <param id="3" string_name="param3" />
    </page>
</config>
```
For example, you go to the yourdomain.com/test/cat/dog/ website. You will able to use the $param2 and $param3 strings in your test.php file. $param2 will return cat, and $param3 will going to be dog.
