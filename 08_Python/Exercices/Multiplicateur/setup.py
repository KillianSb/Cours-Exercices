from cx_Freeze import setup, Executable
setup(
    name = "Multiplicateur",
    version = "1.0",
    description = "Multiplie le chiffre voulue",
    executables = [Executable("multiplicateur.py")]
)