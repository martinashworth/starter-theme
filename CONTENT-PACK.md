# Content Pack Interface

A content pack contains everything needed to transform the starter theme into a client-specific site. This document defines the interface — what a content pack must provide and where each piece goes.

## Structure

```
content-pack/
├── manifest.md          # Inventory of everything in the pack
├── pages/               # Page content as markdown with frontmatter
│   ├── home.md
│   ├── about.md
│   └── ...
├── images/              # Hero images, headshots, logos
├── fonts/               # Custom font files (woff2)
└── config.json          # Colours, layout, typography overrides
```

## config.json

```json
{
  "colors": {
    "base": "#FFFFFF",
    "contrast": "#111111",
    "accent-1": "#FFEE58",
    "accent-2": "#F6CFF4",
    "accent-3": "#503AA8",
    "accent-4": "#686868",
    "accent-5": "#FBFAF3"
  },
  "layout": {
    "contentSize": "1100px",
    "wideSize": "1440px"
  },
  "typography": {
    "fontFamily": "Outfit, sans-serif",
    "bodyWeight": "300",
    "headingWeight": "700"
  },
  "site": {
    "title": "Site Name",
    "tagline": "A short description",
    "url": "https://example.com"
  },
  "footer": {
    "location": "Your Location",
    "phone": "Your Phone Number",
    "email": "hello@example.com"
  }
}
```

## How to apply

### 1. Colours
Replace the palette in `theme.json` → `settings.color.palette` with values from `config.json`.

### 2. Fonts
- Copy font files from `content-pack/fonts/` to `assets/fonts/`
- Update `theme.json` → `settings.typography.fontFamilies` with new font face definitions
- Update heading and body font references in `theme.json` → `styles`

### 3. Layout
Update `theme.json` → `settings.layout` with `contentSize` and `wideSize` from config.

### 4. Footer
Edit `parts/footer.html` — replace placeholder text:
- `Your Location` → location from config
- `Your Phone Number` → phone from config
- `hello@example.com` → email from config

### 5. Pages
Import page content via WordPress admin or WP-CLI:
```bash
wp post create --post_type=page --post_title="Page Title" --post_content="$(cat pages/home.md)" --post_status=publish
```

### 6. Images
Upload via WordPress admin (Media > Add New) or WP-CLI:
```bash
wp media import content-pack/images/*.jpg
```

### 7. Site identity
```bash
wp option update blogname "Site Name"
wp option update blogdescription "A short description"
```

### 8. Navigation
Create menu items via WordPress admin (Appearance > Editor > Navigation) to match the pages created.

## Verification

After applying a content pack:
- [ ] Site title and tagline display correctly in header
- [ ] Navigation links to all pages
- [ ] Colours match the config
- [ ] Custom font loads on all pages
- [ ] Footer shows correct contact details
- [ ] All pages render with correct content and images
- [ ] 404 page works
