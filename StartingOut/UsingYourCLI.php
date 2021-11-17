<?php include '../inc/header.php';?>
<?php include '../inc/sidenav.php';?>
  <!-- MAIN -->
  <div class="m-main" id="main">
    <div class="m-row m-margin-bottom">
      <div class="m-col16 m-center" style="padding:3%">
        <h1>
          Using Your CLI
        </h1>
        <p class="m-xlarge m-text-dark-grey">
          Navigating the Command Line Interface
        </p>
      </div>
      <div class="m-col16" "style=padding:3%;">
        <div style="text-align:center; padding:16px;" class="m-hide-small m-light-grey m-card-2">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/q62jjBSjeEA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr />
        <h2>What Is A CLI</h2>
        <p>
          The CLI on your computer could be called 2 diffirent things based on if you are using windows or mac. On mac your CLI is called Terminal Window,
          on Windows it is called Command Prompt. Your CLI is basicaly the most basic form of a File Browser.
        </p>
        <hr />
        <h2>Commands on Windows</h2>
        <h3>dir</h3>
        <p>
          dir stands for directory, if you enter this command it will show you everything you have in the folder you are currently in.
        </p>
        <h3>cd ______</h3>
        <p>
          cd stands for change directory. If you enter this command followed by a space and whatever file you want to open, for example if I entered the command cd projects
          it would change to my projects folder.
        </p>
        <h3>D:/C:</h3>
        <p>
          if you enter the command D: or C: than it will change whatever drive you are able to search through in your computer. For example if my projects folder is in my
          d-drive and I am in my c-drive then I can enter the command D: to switch drives.
        </p>
        <h3>cd ..</h3>
        <p>
          The command cd .. allows you to undo the last command you did, for example if you accidentaly opened the wrong folder you could enter cd .. and return
          to the folder that you were in before.
        </p>
        <h3>Arrow Keys</h3>
        <p>
          The arrow keys allow you to re-enter a command that you recently entered. If you entered the command cd .. recently and you need to do it again you
          can push arrow key up and it allows you to scroll through recently used commands.
        </p>
        <h3>Tab</h3>
        <p>
          The tab key allows for you to autocomplete a command. For example, if you are trying to navigate to the project folder Hello World, you could type in cd Hello
          and then press tab and it would auto complete the command if you dont have any other folders that start with Hello.
        </p>
        <hr />
        <h2>Commands On Mac</h2>
        <h3>Same Commands</h3>
        <p>
          Many of the commands that you use on Windows will be the same on Mac. The directory, changing directory, changing drives, using arrow keys, and backing out of a folder will
          all be the same if you use it on Windows or Mac.
        </p>
        <h3>Clear</h3>
        <p>
          If you are in Mac and you enter the command clear it will erase everything from the command line and it will look like if you had just opened it.
        </p>
        <h3>Tab</h3>
        <p>
          Sadly in the CLI on Mac you are unable to use the autocomplete feature.
        </p>
      </div>
    </div>
<?php include '../inc/footer.php';?>
