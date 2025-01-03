# Responsive Column Order Control for Elementor

This function is a custom implementation to add a "Responsive Column Order" control in Elementor for WordPress. It allows users to define the display order of columns for different devices (desktop, tablet, and mobile) directly within the Elementor editor. Here's a detailed breakdown of the function:

---

## Key Components

### 1. `add_responsive_control` Method
- Adds a new control named `responsive_column_order` to the column layout in Elementor.
- The control is of type `NUMBER`, allowing users to input numeric values that determine the column's display order.

### 2. Control Options
- **Label**: Displays "Responsive Column Order" as the control label in the Elementor editor.
- **Type**: `NUMBER` type enables users to specify a numeric order for the column.
- **Separator**: Adds a visual separator ('before') for better organization of controls in the Elementor UI.
- **Selectors**:
  - Dynamically applies the entered value (`{{VALUE}}`) as CSS styles for:
    - `order` (standard CSS property).
    - `-webkit-order` (for WebKit-based browsers).
    - `-ms-flex-order` (for older Internet Explorer versions).

### 3. Hook
- The function hooks into `elementor/element/column/layout/before_section_end`, targeting the layout section of Elementor's column element.
- This ensures the control is added seamlessly before the layout section ends.

---

## Usage Instructions

### Add the Function:
1. Copy the function into your theme’s `functions.php` file or a custom plugin.

### Locate the Control in Elementor:
1. Open the Elementor editor.
2. Select a column to access its settings.
3. Find the "Responsive Column Order" control under the Layout section.

### Set Column Order:
- Enter numeric values for each device (desktop, tablet, mobile).
- These values generate the CSS `order` property, defining the column's display order.

---

## Example Use Case

Imagine a three-column layout where you want the second column to appear first on mobile devices:

- **Desktop**: Set all column orders to `0` (default order).
- **Mobile**: Set the second column's order to `1` and higher numbers for other columns.

**Generated CSS Example**:
```css
@media (max-width: 767px) {
    .elementor-column {
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1;
    }
}

Benefits

1. Responsiveness:
   - Easily adjust the visual order of columns for different devices without modifying the HTML structure.

2. User-Friendly:
   - The control integrates directly into Elementor’s UI, enabling users to manage column order visually without requiring CSS knowledge.

3. Cross-Browser Compatibility:
   - Ensures consistent functionality across all browsers by utilizing vendor prefixes for the order property (-webkit-order, -ms-flex-order).

This feature empowers Elementor users to create fully responsive designs by dynamically reordering columns based on device-specific requirements. Integrate this function to enhance your WordPress site-building capabilities!
