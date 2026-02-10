# Badge Extension

## Version
1.1.0

## Description

This extension adds concise, consistent, and legible badges to your forum posts using [shields.io](https://shields.io/). A dropdown in the posting editor lets you pick from a set of common badge presets, or you can create your own by specifying a custom `SUBJECT-STATUS-COLOR` value inside the `[badge][/badge]` BBCode tags.

Badge presets are defined in `config/badge_presets.php`. To add, remove, or edit a preset, simply edit that file — no other files need to be changed.



## Install

1. Download the latest release.
2. Unzip the downloaded release, and change the name of the folder to `badge`.
3. In the `ext` directory of your phpBB board, create a new directory named `avathar` (if it does not already exist).
4. Copy the `badge` folder to `/ext/avathar/` (if done correctly, you'll have the main extension class at (your forum root)/ext/avathar/badge/composer.json).
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Badge Extension` under the Disabled Extensions list, and click its `Enable` link.
7. Look in the bbcode ACP and you will see a new bbcode with `[badge]{INTTEXT1}-{INTTEXT2}-{INTTEXT3}[/badge]`
   HTML replacement as:
   ```
   <img src="https://img.shields.io/badge/{INTTEXT1}-{INTTEXT2}-{INTTEXT3}.svg" alt="" style="margin-bottom: -5px;" />
   ```
   and help line with `[badge]SUBJECT-STATUS-COLOR[/badge]`

## Adding or Editing Badge Presets

Edit `config/badge_presets.php` and add a new entry to the array:

```php
['key' => 'mypreset', 'value' => 'build-passing-brightgreen', 'title' => 'Build Passing'],
```

Purge the board cache afterwards. The new preset will appear in the posting editor dropdown automatically.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Badge Extension` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/avathar/badge` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
