{assign var=simple value='simple, non array/object'}
{assign var=array value=['item1','item2','item3','item4']}
{assign var=ass_array value=['y'=>'yellow','b'=>'blue','r'=>'red','w'=>'white']}


<h2>{$var}</h2>
<div>
    <h3>Basic</h3>
    <ul>
        <li>{ $simple } = {$simple}</li>
        <li>{ $array[2] } = {$array[2]}</li>
        <li>{ $ass_array.y] } = {$ass_array.y}</li>
    </ul>
</div>