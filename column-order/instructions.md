# Responsive Column Order Control for Elementor

This snippet adds a "Responsive Column Order" control to Elementor, allowing users to customize column display order for different devices.

## Key Features
- Adjust column order for desktop, tablet, and mobile views.
- Fully compatible with Elementor's responsive design system.
- Easy to use and integrates directly into Elementor's UI.

## How to Use
1. Copy the code from `responsive-column-order.php`.
2. Paste it into your theme's `functions.php` file or a custom plugin.
3. Open Elementor and select a column.
4. Adjust the column order in the "Responsive Column Order" control.

## Example Use Case
- **Desktop Order**: Default (0 for all columns).
- **Mobile Order**: Second column appears first.

Generated CSS:
```css
@media (max-width: 767px) {
    .elementor-column {
        order: 1;
    }
}
