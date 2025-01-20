//variables
// Arreglo para almacenar los valores seleccionados de cada categoría
let selectedValues = [];

document.querySelector('.campo_preferencias').querySelectorAll('input[type="radio"]').forEach(radio => {
    radio.addEventListener('change', (event) => {
        let selectedValue = event.target.value;
        let category = event.target.name;

          // Si la categoría ya existe en el arreglo, la actualizamos
          if (selectedValues.some(item => item.category === category)) {
            selectedValues = selectedValues.map(item => 
                item.category === category ? { category, value: selectedValue } : item
            );
        } else {
            // Si la categoría no existe, la agregamos
            selectedValues.push({ category, value: selectedValue });
        }

        // Desactivar las opciones ya seleccionadas en otras categorías dentro de campo_preferencias
        document.querySelector('.campo_preferencias').querySelectorAll(`input[type="radio"]`).forEach(otherRadio => {

            let otherCategory = otherRadio.name;
            let otherValue = otherRadio.value;

              // Si el valor ya fue seleccionado en otra categoría, deshabilitar
              if (selectedValues.some(item => item.category !== otherCategory && item.value === otherValue)) {
                otherRadio.disabled = true;
            } else {
                otherRadio.disabled = false;
            }

        });
    });
});