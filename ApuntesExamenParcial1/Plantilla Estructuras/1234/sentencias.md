# Sentencias HTML y CSS (Guía rápida de examen)

Este archivo resume las sentencias/comandos que aparecen en tus plantillas de la carpeta `1234`.

## 1) Etiquetas HTML semánticas

### `header`
- **Qué hace:** define la cabecera de la página o de una sección.
- **Uso típico:** título principal, logo, subtítulo.

### `nav`
- **Qué hace:** contiene enlaces de navegación.
- **Uso típico:** menú principal con lista de enlaces.

### `section`
- **Qué hace:** agrupa contenido relacionado en bloques.
- **Uso típico:** zona central, bloques de contenido.

### `article`
- **Qué hace:** representa contenido independiente/autónomo.
- **Uso típico:** noticia, entrada, bloque de texto reutilizable.

### `aside`
- **Qué hace:** contenido lateral o complementario al principal.
- **Uso típico:** barra lateral, ayuda, enlaces secundarios.

### `footer`
- **Qué hace:** pie de página o pie de sección.
- **Uso típico:** créditos, contacto, copyright.

### `ul`, `li`, `a`
- **`ul`**: lista no ordenada.
- **`li`**: elemento de la lista.
- **`a`**: enlace (`href`).

---

## 2) Propiedades CSS de estructura y caja

### `width`
- **Qué hace:** define el ancho de un elemento.
- **Ejemplo:** `width: 100%;` ocupa todo el ancho disponible.

### `min-height`
- **Qué hace:** altura mínima del elemento.
- **Ejemplo:** `min-height: 100vh;` mínimo igual al alto de la ventana.

### `height`
- **Qué hace:** fija la altura exacta.
- **Ejemplo:** `height: 100%;` (depende de que el padre tenga altura definida).

### `margin`
- **Qué hace:** espacio exterior del elemento (afuera del borde).
- **Ejemplo:** `margin: 0 auto;` centra horizontalmente si tiene ancho definido.

### `padding`
- **Qué hace:** espacio interior del elemento (entre contenido y borde).
- **Ejemplo:** `padding: 12px;` añade aire interno por todos lados.

### `border`
- **Qué hace:** dibuja borde alrededor del elemento.
- **Ejemplo:** `border: 2px solid #6ca32a;`.

### `box-sizing`
- **Qué hace:** controla cómo se calcula el tamaño final.
- **`content-box` (por defecto):** `width` no incluye padding ni border.
- **`border-box`:** `width` sí incluye padding y border (más fácil para maquetar).

---

## 3) Propiedades de color y texto

### `background-color`
- **Qué hace:** color de fondo del elemento.

### `color`
- **Qué hace:** color del texto.

### `font-family`
- **Qué hace:** tipografía del texto.

### `font-size`
- **Qué hace:** tamaño de letra.

### `text-align`
- **Qué hace:** alineación horizontal del texto.
- **Ejemplo:** `center`, `left`, `right`.

### `text-decoration`
- **Qué hace:** decoración del texto.
- **Ejemplo:** `none` quita subrayado en enlaces.

---

## 4) Maquetación (cómo se acomodan columnas)

### `display: block`
- **Qué hace:** el elemento ocupa todo el ancho disponible y salta de línea.
- **Uso en reset:** asegurar comportamiento consistente de etiquetas semánticas.

### `display: inline-block`
- **Qué hace:** permite poner elementos en línea conservando tamaño de bloque.
- **Uso típico:** items del menú (`li`).

### `display: flex`
- **Qué hace:** activa Flexbox para alinear y repartir elementos.
- **Uso típico:** layout vertical del `body`, menús, columnas flexibles.

### `flex-direction`
- **Qué hace:** dirección principal en contenedor flex.
- **Ejemplo:** `column` apila elementos verticalmente.

### `flex: 1`
- **Qué hace:** el elemento crece para ocupar el espacio sobrante.
- **Uso típico:** `#zona-central` para llenar el alto entre nav y footer.

### `float`
- **Qué hace:** mueve elementos a izquierda o derecha permitiendo columnas clásicas.
- **Ejemplo:** `float: left;` o `float: right;`.

### `clear`
- **Qué hace:** evita que un elemento se quede al lado de floats anteriores.
- **Ejemplo:** `clear: both;` en el footer para que quede debajo de columnas.

### `overflow: hidden`
- **Qué hace:** recorta desbordes y también ayuda a “encerrar” elementos flotados.

### `display: grid`
- **Qué hace:** activa CSS Grid para crear rejillas de filas/columnas.

### `grid-template-columns`
- **Qué hace:** define cuántas columnas hay y su ancho.
- **Ejemplo:** `grid-template-columns: 700px 260px;`.

---

## 5) Reset CSS (normalización)

### `margin: 0; padding: 0; border: 0;`
- **Qué hace:** quita estilos por defecto del navegador para empezar desde cero.

### `list-style: none;`
- **Qué hace:** quita viñetas de listas (`ul`).

---

## 6) Unidades más usadas

### `px`
- **Qué es:** píxeles, unidad fija.

### `%`
- **Qué es:** porcentaje respecto al tamaño del contenedor padre.

### `vh`
- **Qué es:** porcentaje del alto de la ventana (viewport).
- **Ejemplo:** `100vh` = alto completo de pantalla.

---

## 7) Atajos de lectura rápida para examen

- **`padding`** = espacio **interno**.
- **`margin`** = espacio **externo**.
- **`border-box`** = ancho más fácil de controlar.
- **`float` + `clear`** = columnas clásicas.
- **`flex`** = repartir/alinear bloques flexible.
- **`grid`** = columnas/filas definidas con precisión.
- **`100vh`** = ocupar alto de ventana.
- **`width: 100%`** = ocupar ancho del contenedor.

---

Si quieres, te puedo hacer una **versión 2 de esta guía** con preguntas tipo examen ("¿qué usarías para...?" + respuesta).