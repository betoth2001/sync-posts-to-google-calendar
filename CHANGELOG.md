# Change Log for Plugin Boilerplate

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

Replace github user GaryJones with betoth2001
```
find . -type f -exec sed -i 's/GaryJones/betoth2001/' '{}' \;
```
Replace instances of plugin-boilerplate with sync-posts-to-google-calendar
find . -type f -exec sed -i 's/plugin-boilerplate/sync-posts-to-google-calendar/' '{}' \;

Replace instances of PluginSlug with sync-posts-to-google-calendar
find . -type f ! -iname changelog.md -exec sed -i 's/PluginSlug/sync-posts-to-google-calendar/i' '{}' \;
find . -type f ! -iname changelog.md -exec grep -i 'PluginSlug' '{}' /dev/null \;

Replace gamajo\ with betoth2001\
find . -type f ! -iname changelog.md -exec grep -i 'gamajo\\' '{}' /dev/null \;
find . -type f ! -iname changelog.md -exec sed -i 's/gamajo\\/betoth2001\\/i' '{}' \;
find . -type f ! -iname changelog.md -exec grep -i 'gamajo\\' '{}' /dev/null \;

Replace gamajo/ with betoth2001/
find . -type f ! -iname changelog.md -exec grep -i 'gamajo\/' '{}' /dev/null \;
find . -type f ! -iname changelog.md -exec sed -i 's/gamajo\//betoth2001\//i' '{}' \;
find . -type f ! -iname changelog.md -exec grep -i 'gamajo\/' '{}' /dev/null \;

replace plugin_slug with sync-posts-to-google-calendar
find . -type f ! -iname changelog.md -exec grep -i 'plugin_slug' '{}' /dev/null \;
find . -type f ! -iname changelog.md -exec sed -i 's/plugin_slug/sync-posts-to-google-calendar/i' '{}' \;
find . -type f ! -iname changelog.md -exec grep -i 'plugin_slug' '{}' /dev/null \;

fixed variables $sync-posts-to-google-calendar to $sync_posts_to_google_calendar
## 1.0.0 - 2017-??-??

* Initial release.

[Unreleased]: https://github.com/betoth2001/sync-posts-to-google-calendar/1.0.0...HEAD
