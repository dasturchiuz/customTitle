# SimpleLocaleOverride Plugin

## About
SimpleLocaleOverride is a plugin for Open Journal Systems 3.4+ that enables easy customization of locale strings without modifying core files. It provides a straightforward way to override default translations with custom text throughout your journal.

## Features
- Simple installation and configuration
- Direct override of locale strings using .po files
- Multiple language support
- No database modifications required
- High-priority overrides ensuring custom translations take precedence
- Compatible with OJS 3.4+

## System Requirements
- OJS 3.4 or higher
- Write permissions for the plugin directory

## Installation
1. Download the latest release from the plugin gallery
2. Go to Website Settings > Plugins
3. Under "Upload A New Plugin", select the downloaded file
4. Click "Upload"
5. Find "SimpleLocaleOverride Plugin" in the list and enable it

## Configuration
No additional configuration is required. Simply add your custom translations to the appropriate locale files.

## Usage

### Directory Structure
```
plugins/generic/SimpleLocaleOverride/
├── index.php
├── SimpleLocaleOverridePlugin.inc.php
├── version.xml
└── locale/
    ├── en/
    │   └── locale.po
    └── uz/
        └── locale.po
```

### Adding Custom Translations
1. Navigate to the plugin's locale directory
2. Create or edit the .po file for your desired language
3. Add your custom translations in the following format:

```po
msgid "original.key"
msgstr "Your custom translation"
```

### Example Translations

To customize the article view title:
```po
msgid "article.pageTitle"
msgstr "Your Custom Title: {$title}"
```

To modify submission heading:
```po
msgid "submission.submit"
msgstr "Submit Your Research"
```

## Troubleshooting

### Common Issues
1. **Translations not appearing:**
   - Ensure the plugin is enabled
   - Check if the locale files are in the correct directory
   - Verify the .po file syntax
   - Clear the OJS cache

2. **Permission Issues:**
   - Make sure the web server has write permissions to the plugin directory

### Debug Tips
- Check OJS error logs for any related errors
- Verify the locale key exists in the original OJS translations
- Ensure the language is enabled in your journal settings

## License
This plugin is licensed under the GNU General Public License v2. See the LICENSE file for details.

## Support
For support and bug reports, please create an issue in our GitHub repository or contact the plugin maintainer.

## Contributing
We welcome contributions to improve the plugin. Please submit pull requests or open issues for any bugs or feature requests.

## Changelog
### Version 1.0.0.0 (2024-02-17)
- Initial release
- Basic locale override functionality
- Support for multiple languages
- Compatible with OJS 3.4+
