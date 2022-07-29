PEEL - PHP Extended Enhanced Language

Language that runs inside php runtime. It's like TypeScript for JavaScript, like Kotlin for Java, like Swift for Objective C.

Key principles:
* Performance is important, but not super important

# Features
## wrapper objects
Feature inspired by JS.

You can use basic types, that aren't objects, like objects. Runtime will automatically create for you wrapper object. For example:
```peel
a = "some string";
a->substr(1,2);
```

is equal to
```peel
a = "some string";
(new \Peel\Stdlib\Wrappers\String(a))->substr(1,2);
```

## dollarless variables
$ sighn aren't required. If you use it, it will be ignored. 
```peel
variable = 1;
$variable = 2;
echo variable;//2
```

## -> and [] are the same
Feature inspired by JS.

You can use -> ane [] both on arrays and objects. There are the same.

## better arrow functions
Feature inspired by JS and C#

Syntax is shorter and allows multiline arrow functions
```peel
a=x=>true;
b=(x,y)=>x+y;
c=x=>{
someCode();
return x;
}
```

## functions accessible from reflection
Feature inspired by C#, but extended

You can use keyword "" to save function's syntax tree for use in reflection



## getters & setters
Feature inspired by JS
```peel
class sample{
    get value(){
    return 1;
    }
    set value(v){
    
    }
}
obj=new sample();
obj->value=2;
echo obj->value;//1
```

## returnValue variable
you can set return value without exiting function

```peel
function x(){
returnValue = true
doSomethink()
}
```

is equal to 
```peel
function x(){
returnValue = true
doSomethink()
return returnValue
}
```

## quick object syntax
inspired by JS

```peel
obj=new {
a=1
b="some text"
c(){
return "method"
}
}
```