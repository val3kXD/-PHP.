<style type="text/css">
	.article-formatted-body pre code {
    font-family: Menlo,Monaco,Consolas,Courier New,Courier,monospace;
    background: none;
    font-size: inherit;
    padding: 0;
    -moz-tab-size: 4;
    tab-size: 4;
    white-space: pre;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
}
.article-formatted-body code {
    font-family: Menlo,Monaco,Consolas,Courier New,Courier,monospace;
    background-color: #fafafa;
    border-radius: 4px;
    overflow-wrap: break-word;
    padding: 3px 6px;
    white-space: normal;
}
code, kbd, samp {
    font-family: monospace,monospace;
    font-size: 1em;
	}
		.menu
		{
			border-radius: 15px;
		}
		li:marker
		{
			color: red;
		}
		.three { 
  		text-algin: center;
		} 
		.three h1 {
  		font-family: 'Merriweather', serif;
  		position: relative;
  		color: #FCF2E5;
  		background: #90806A;
  		font-size: 2.5em;
  		font-weight: normal;
  		padding: 10px 40px;
  		display: inline-block;
  		margin: 0;
  		line-height: 1;
		}
		.three h1:before {
  		content: ""; 
  		position: absolute;
  		left: 0;
  		bottom: -15px;
  		background: #90806A;
		}
</style>

<div align = "center" class="three"><h1>Калькулятор на языке программирования Python</h1> </div>
<br>

<h3>Начало</h3>
<p>Всем привет! Сегодня мы обучимся делать простенький калькулятор на Python и Tkinter</p>
<br>
<p>Создаём окно 485 на 550. Размеры не важны, мне понравились такие. Так же указываем, что окно не будет изменяться.</p>
<pre><code class="python">from tkinter import *


class Main(Frame):
    def __init__(self, root):
        super(Main, self).__init__(root)
        self.build()

    def build(self):
        pass
 
    def logicalc(self, operation):
        pass

    def update():
       pass


if __name__ == '__main__':
    root = Tk()
    root["bg"] = "#000"
    root.geometry("485x550+200+200")
    root.title("Калькулятор")
    root.resizable(False, False)
    app = Main(root)
    app.pack()
    root.mainloop()
</code></pre><br/>
<p>Отлично, идём дальше.</p><br/>
<h2>Делаем кнопочки</h2><br/>
<p>В методе <i>build</i> создаём такой список:</p><br/>
<pre><code class="python">btns = [
            "C", "DEL", "*", "=",
            "1", "2", "3", "/",
            "4", "5", "6", "+",
            "7", "8", "9", "-",
            "+/-", "0", "%", "X^2"
        ]
</code></pre><br/>
<br/>
<p>Он отвечает за все кнопки, отображающиеся у нас в окне.</p><br/>
<p>Мы создали список, теперь проходимся циклом и отображаем эти кнопки. Для этого в том же методе пишем следующее:</p><br/>
<br/>
<pre><code class="python">x = 10
        y = 140
        for bt in btns:
            com = lambda x=bt: self.logicalc(x)
            Button(text=bt, bg="#FFF",
                   font=("Times New Roman", 15),
                   command=com).place(x=x, y=y,
                                      width=115,
                                      height=79)
            x += 117
            if x > 400:
                x = 10
                y += 81
</code></pre><br/>
<br/>
<p>Замечательно, у нас есть кнопочки. Добавляем надпись с выводом результата. Я хочу что бы текст был слева, следовательно, аттрибутов выравнивания текста писать не нужно.</p><br/>
<br/>
<pre><code class="python">self.formula = "0"
self.lbl = Label(text=self.formula, font=("Times New Roman", 21, "bold"),
                 bg="#000", foreground="#FFF")
self.lbl.place(x=11, y=50)
</code></pre><br/>
<br/>
<h2>Пишем логику</h2><br/>
<br/>
<pre><code class="python">def logicalc(self, operation):
    if operation == "C":
        self.formula = ""
    elif operation == "DEL":
        self.formula = self.formula[0:-1]
    elif operation == "X^2":
        self.formula = str((eval(self.formula))**2)
    elif operation == "=":
        self.formula = str(eval(self.formula))
    else:
        if self.formula == "0":
            self.formula = ""
        self.formula += operation
    self.update()

def update(self):
    if self.formula == "":
        self.formula = "0"
    self.lbl.configure(text=self.formula)
</code></pre><br/>
<br/>
<p>Так, как у нас нет ввода с клавиатуры, мы можем позволить себе сделать так, просто проверить на спец. кнопки (C, DEL, =) и в остальных случаях просто добавить это к формуле.</p><br/>
<br/>
<p>У этого калькулятора множество недочетов, но мы и не стремились сделать его идеальным.</p><br/>
<br/>
<br/>
<br/>
<h1>Полный код моей версии калькулятора:</h1><br/>
<pre><code class="python">from tkinter import *


class Main(Frame):
    def __init__(self, root):
        super(Main, self).__init__(root)
        self.build()

    def build(self):
        self.formula = "0"
        self.lbl = Label(text=self.formula, font=("Times New Roman", 21, "bold"), bg="#000", foreground="#FFF")
        self.lbl.place(x=11, y=50)

        btns = [
            "C", "DEL", "*", "=",
            "1", "2", "3", "/",
            "4", "5", "6", "+",
            "7", "8", "9", "-",
            "(", "0", ")", "X^2"
        ]

        x = 10
        y = 140
        for bt in btns:
            com = lambda x=bt: self.logicalc(x)
            Button(text=bt, bg="#FFF",
                   font=("Times New Roman", 15),
                   command=com).place(x=x, y=y,
                                      width=115,
                                      height=79)
            x += 117
            if x > 400:
                x = 10
                y += 81

    def logicalc(self, operation):
        if operation == "C":
            self.formula = ""
        elif operation == "DEL":
            self.formula = self.formula[0:-1]
        elif operation == "X^2":
            self.formula = str((eval(self.formula))**2)
        elif operation == "=":
            self.formula = str(eval(self.formula))
        else:
            if self.formula == "0":
                self.formula = ""
            self.formula += operation
        self.update()

    def update(self):
        if self.formula == "":
            self.formula = "0"
        self.lbl.configure(text=self.formula)


if __name__ == '__main__':
    root = Tk()
    root["bg"] = "#000"
    root.geometry("485x550+200+200")
    root.title("Калькулятор")
    root.resizable(False, False)
    app = Main(root)
    app.pack()
    root.mainloop()
</code></pre></div></div>