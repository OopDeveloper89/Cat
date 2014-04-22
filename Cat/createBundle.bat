@ECHO OFF

set /p bundle_namespace=Enter bundle namespace...
set /p bundle_format=Enter bundle format(for example "yml")...

php app/console generate:bundle --namespace=%bundle_namespace% --format=%bundle_format%

PAUSE