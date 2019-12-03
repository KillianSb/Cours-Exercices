var_1 = 3
var_1 = "str"

def my_function():
    var_1 = 3
    print(var_1)

print(__name__)

if __name__=="__main__":
    from test_import import my_orther_function
    my_orther_function()
