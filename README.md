## What is this?
This is a small project, about an easy and quick URL rewrite engine, based on PHP. You can add an index page, and more pages, with parameters. Its Apache2, and IIS compatible.

## Setup
Just drag the files to the website's root directory. I recommend to create a sub folder for the website.

## Adding an index page

```xml
<config>
    <index href="yoursubfolder/index.php" />
</config>
```

## Adding a page

```xml
<config>
    <page name="test" href="yoursubfolder/test.php" />
</config>
```

## Adding parameters

```xml
<config>
    <page name="test" href="yoursubfolder/test.php">
        <param id="2" string_name="param2" />
        <param id="3" string_name="param3" />
    </page>
</config>
```
