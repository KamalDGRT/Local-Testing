import math
import turtle
 
def drawPhyllotacticPattern( t, petalstart, angle = 137.508, size = 2, cspread = 4 ):
        """print a pattern of circles using spiral phyllotactic data"""
        # initialize position
        turtle.pen(outline=1,pencolor="black",fillcolor="orange")
        # turtle.color("orange")
        phi = angle * ( math.pi / 180.0 )
        xcenter = 0.0
        ycenter = 0.0
       
        # for loops iterate in this case from the first value until < 4, so
        for n in range (0,t):
                r = cspread * math.sqrt(n)
                theta = n * phi
                
                x = r * math.cos(theta) + xcenter
                y = r * math.sin(theta) + ycenter
 
                
                turtle.up()
                turtle.setpos(x,y)
                turtle.down()
                
                turtle.setheading(n * angle)
                if n > petalstart-1:
                        #turtle.color("yellow")
                        drawPetal(x,y)
                else: turtle.stamp()
                
 
def drawPetal( x, y ):
        turtle.up()
        turtle.setpos(x,y)
        turtle.down()
        turtle.begin_fill()
        #turtle.fill(True)
        turtle.pen(outline=1,pencolor="black",fillcolor="yellow")
        turtle.right(20)
        turtle.forward(100)
        turtle.left(40)
        turtle.forward(100)
        turtle.left(140)
        turtle.forward(100)
        turtle.left(40)
        turtle.forward(100)
        turtle.up()
        turtle.end_fill() 
 
 
 
turtle.shape("turtle")
turtle.speed(0) 
drawPhyllotacticPattern( 200, 160, 137.508, 4, 10 )
turtle.exitonclick() 