<h1>Ficha de Desarrollo</h1>
<section>
    <h2>{{cuenta}} {{nombre}}</h2>
    <em>Correo: {{correo}}</em>
</section>
<section>
    <h2>Proyectos</h2>
    <table>
        <tr>
        <td>Código</td>
        <td>Proyecto</td>
        </tr>
        {{foreach proyectos}}
        <tr>
        <td>{{id}}</td>
        <td>{{name}}</td>
        </tr>
        {{endfor proyectos}}
    </table>
    <table>
    <tr>
        <td>Educacion Academica</td>
        <td>Cursos Adquiridos</td>
        <td>Experiencia Laboral</td>
        <td>Idiomas</td>
        </tr>
        {{foreach curriculum}}
        <tr>
        <td>{{Academica}}</td>
        <td>{{Cursos}}</td>
        <td>{{Laboral}}</td>
        <td>{{Idioma}}</td>
        </tr>
        {{endfor curriculum}}
    </table>
</section>