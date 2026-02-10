# Changelog

## 1.1.0 - 2026-02-10

### Changed
- Refactored badge presets out of language file into dedicated `config/badge_presets.php`
- Badge dropdown in posting editor now renders dynamically from config file
- Removed preset entries from `language/en/common.php`, keeping only UI strings
- Updated extension description and README

### Fixed
- SQL injection vulnerability in bbcode_tag lookup query
- Added meaningful alt text to badge images for accessibility

### Added
- New migration to update existing BBCode template with alt text
- Documentation for adding and editing badge presets

## 1.0.0 - 2024-11-06

### Added
- Initial release
- Badge BBCode with shields.io integration
- Dropdown preset selector in posting editor
- Presets for changelog, license, and version badges
- Custom badge support via `[badge]SUBJECT-STATUS-COLOR[/badge]`
