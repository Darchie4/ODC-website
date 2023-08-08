@echo off
REM Task 1: Run powershell.exe with "phpstorm64 ."
"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -Command "phpstorm64 ."

REM Task 2: Run powershell.exe and navigate to "E:\Git repos\ODC-website"
cd /d "E:\Git repos\ODC-website"
"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe"
