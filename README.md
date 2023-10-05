# Iimagefields
[Adminer](https://www.adminer.org/) plugin for displaying images.

Image `max-width` and `max-height` can be configured (see [Adminer - Plugins -> To use a plugin section](https://www.adminer.org/en/plugins/#use)):

    ...
    $plugins = array(
        // specify enabled plugins here
        new AdminerImagefields(200, 200, false)
    );
    ...

Plugin was inspired by [Přemysl Karbula's - Colorfields](https://github.com/smuuf/adminer-colorfields).
