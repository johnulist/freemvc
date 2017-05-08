
# mini-mvc
Mini MVC

 #### Lista de clases
- DB
- Auth
- Session
- Controller
- Model
- View
- Upload
- Template


[Version 0.1] 

#### Estructura
<ul>
<li>mini-mv
<ul>
    <li>Core</li>
    <li>controller</li>
    <li>models</li>
    <li>views</li>
    
</ul>
</li>
 </ul>


### Class: DB

<p>Puede ser llamada mediante el namespace dentro del archivo php: </p>
<code>
 
    namespace Core\DB;
    
</code>

<p> De ese modo entonces podrias uilizar los siguientes metodos:</p>
<ul>
    <li>select</li>
    <li>insert</li>
    <li>update</li>
    <li>delete</li>
</ul>

### Por ejemplo un select

<code>

    DB->select('select name FROM user WHERE id=:id',['id' => 1]);

</code>

## También un select normal
<code>

    DB->select('select name FROM user');

</code>