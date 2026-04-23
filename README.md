# Badge Extension

## Version
1.1.1

## Description

This extension adds concise, consistent, and legible badges to your forum posts using [shields.io](https://shields.io/). A dropdown in the posting editor lets you pick from a set of common badge presets, or you can create your own by specifying a custom `SUBJECT-STATUS-COLOR` value inside the `[badge][/badge]` BBCode tags.

Badge presets are defined in `config/badge_presets.php`, with display labels provided via language keys in `language/en/common.php`.


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

## Built-in Presets

| Preset | Badge Value | Description |
|--------|-------------|-------------|
| changelog | `changelog-v1.0.0-a808f3` | Changelog |
| custom | `SUBJECT-STATUS-COLOR` | Custom |
| license | `license-GPLv2-blue` | License GPLv2 |
| v100 | `version-1.0.0-FFFF00` | Version 1.0.0 |
| v101 | `version-1.0.1-f36808` | Version 1.0.1 |
| v200 | `version-2.0.0-ff5733` | Version 2.0.0 |
| v300 | `version-3.0.0-ff5733` | Version 3.0.0 |
| v400 | `version-4.0.0-ff5733` | Version 4.0.0 |
| phpbb33 | `phpBB-3.3-blue` | phpBB 3.3 |
| stable | `stable-yes-brightgreen` | Stable |
| beta | `status-beta-yellow` | Beta |
| build | `build-passing-brightgreen` | Build Passing |

## Adding or Editing Badge Presets

1. Edit `config/badge_presets.php` and add a new entry to the array:

   ```php
   ['key' => 'mypreset', 'value' => 'build-passing-brightgreen', 'lang_key' => 'BADGE_PRESET_MYPRESET'],
   ```

   The `value` follows the shields.io format `SUBJECT-STATUS-COLOR`, where `COLOR` is a named color (e.g. `blue`, `brightgreen`) or a hex code without the `#` (e.g. `ff5733`).

2. Add the matching language key to `language/en/common.php`:

   ```php
   'BADGE_PRESET_MYPRESET' => 'Build Passing',
   ```

3. Purge the board cache. The new preset will appear in the posting editor dropdown automatically.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Badge Extension` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/avathar/badge` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
