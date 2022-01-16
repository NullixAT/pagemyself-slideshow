<?php

// prevent loading directly in the browser without framelix context
if (!defined("FRAMELIX_MODULE")) {
    die();
}
// this config represents the editable configuration that can be changed by the user in the admin interface
// this should not be under version control
?>
<script type="application/json">
    {
        "compiler": {
            "Slideshow": {
                "js": {
                    "pageblock-slideshow": {
                        "files": [
                            {
                                "type": "folder",
                                "path": "js\/page-blocks\/slideshow",
                                "recursive": true
                            }
                        ],
                        "options": {
                            "noInclude": true
                        }
                    }
                },
                "scss": {
                    "pageblock-slideshow": {
                        "files": [
                            {
                                "type": "folder",
                                "path": "scss\/page-blocks\/slideshow",
                                "recursive": true
                            }
                        ],
                        "options": {
                            "noInclude": true
                        }
                    }
                }
            }
        }
    }
</script>
