//variables
// Arreglo para almacenar los valores seleccionados de cada categoría
let selectedValues_2 = [];
console.log('funciona');


document.querySelector('.campo_preferencias_comunicacion').querySelectorAll('input[type="radio"]').forEach(radio => {
    radio.addEventListener('change', (event) => {
        let selectedValue = event.target.value;
        let category = event.target.name;

          // Si la categoría ya existe en el arreglo, la actualizamos
          if (selectedValues_2.some(item => item.category === category)) {
            selectedValues_2 = selectedValues_2.map(item => 
                item.category === category ? { category, value: selectedValue } : item
            );
        } else {
            // Si la categoría no existe, la agregamos
            selectedValues_2.push({ category, value: selectedValue });
        }

        // Desactivar las opciones ya seleccionadas en otras categorías dentro de campo_preferencias
        document.querySelector('.campo_preferencias_comunicacion').querySelectorAll(`input[type="radio"]`).forEach(otherRadio => {

            let otherCategory = otherRadio.name;
            let otherValue = otherRadio.value;

              // Si el valor ya fue seleccionado en otra categoría, deshabilitar
              if (selectedValues_2.some(item => item.category !== otherCategory && item.value === otherValue)) {
                otherRadio.disabled = true;
            } else {
                otherRadio.disabled = false;
            }

        });
    });
});