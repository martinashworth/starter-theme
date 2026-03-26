# Starter Theme

A standalone WordPress theme for brochure and service websites. No parent theme dependency — this is fully independent and won't break when WordPress default themes update.

## What this is

A clean, minimal starting point for client sites. It provides:

- Sticky header with site title, tagline, and navigation
- Footer with location and contact details
- Page templates (with and without title)
- Blog-ready index template
- 404 error page
- Outfit font (4 weights)
- Fluid typography and responsive spacing
- Full Site Editing support

## How to use

1. Copy the `starter-theme` directory into your WordPress `wp-content/themes/` folder
2. Activate the theme in WordPress admin (Appearance > Themes)
3. Customise via a content pack or directly in the Site Editor

## Customisation points

Everything you need to change to make this your own:

| What | Where | How |
|---|---|---|
| **Colours** | `theme.json` → `settings.color.palette` | Replace hex values for Base, Contrast, Accent 1-6 |
| **Fonts** | `theme.json` → `settings.typography.fontFamilies` | Replace Outfit font face entries + files in `assets/fonts/` |
| **Layout widths** | `theme.json` → `settings.layout` | Adjust `contentSize` (1100px) and `wideSize` (1440px) |
| **Header** | `parts/header.html` | Edit in Site Editor or modify block markup directly |
| **Footer** | `parts/footer.html` | Replace placeholder location, phone, email |
| **Site identity** | WordPress admin | Settings > General: site title and tagline |
| **Navigation** | WordPress admin | Appearance > Editor > Navigation |
| **Logo** | WordPress admin | Appearance > Editor > Header: add site logo block |

## Content pack

For systematic customisation, see [CONTENT-PACK.md](CONTENT-PACK.md) — a structured interface for applying client-specific content, colours, fonts, and images.

## Requirements

- WordPress 6.7 or later
- PHP 7.2 or later
- No parent theme required
