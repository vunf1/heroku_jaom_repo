function onRootOFF(folderName) {
    const listOfFiles = ['Project_Nexus', 'RWP_releaseVersion.apk', 'JARcase_Study_Coursework.zip', 'vbNet_Software_2016.zip', ];
    if (listOfFiles.contain(folderName)) {

        if (folderName == "Project_Nexus") {
            alertify.message('Loading...' + folderName + ' ');

            window.location.replace("https://" + SERVERADDRESS + "/projects/" + folderName + "/index.php");

        } else if (folderName == "RWP_releaseVersion.apk") {
            alertify.message('Loading... APK');
            window.location.replace("https://" + SERVERADDRESS + "/projects/real_world_project/" + folderName);
        } else if (folderName == "JARcase_Study_Coursework.zip") {
            alertify.message('Loading... JAR');
            window.location.replace("https://" + SERVERADDRESS + "/projects/" + folderName);
        } else if (folderName == "vbNet_Software_2016.zip") {
            alertify.message('Loading... vb.NET');
            window.location.replace("https://" + SERVERADDRESS + "/projects/" + folderName);
        } else {
            alertify.message('Loading...' + folderName);
            window.location.replace("https://" + SERVERADDRESS + "/projects/" + folderName);

        }

    } else {
        alertify.alert("Project Does not exist")
    }
};